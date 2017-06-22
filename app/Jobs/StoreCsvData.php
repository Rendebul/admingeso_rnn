<?php

namespace App\Jobs;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\ProcessCsvEvent;
use App\Services\CsvReader;
use App\User;
use App\ArchivoCarga;
use App\ErrorArchivoCarga;
use App\MensajeErrorArchivoCarga;
use DB;

class StoreCsvData implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $service;
    protected $user;
    protected $archivo;
    protected $errors;

    public function __construct(CsvReader $service, User $user, ArchivoCarga $archivo)
    {
        $this->service = $service;
        $this->user = $user;
        $this->archivo = $archivo;
    }

    public function handle()
    {
        $this->estadoProcesando();

        $resultado = $this->service->openFile();
        if ($resultado === false) {
            $this->throwException('Error al abrir el archivo');
        }

        //DB::beginTransaction();

        $this->service->deleteData();
        $resultado = $this->service->readFile();
        if (!$resultado) {
            //DB::rollback();
            if ($this->service->getLinea() - $this->service->getErrors()->count() <= 0) {
                $this->estadoError();
                $this->throwException('No pudo leer ningún dato');
            } else {
                $this->estadoCompletado();
                $this->throwException('Lectura con errores');
            }
        } else {
            $this->estadoCompletado();
            $this->notifyToUser();
            //DB::commit();
        }
    }

    private function updateEstadoCarga($datos)
    {
        $this->archivo->estado_carga = $datos['estado_carga'];
        $this->archivo->mensaje = $datos['mensaje'];
        $this->archivo->registros_leidos = $this->service->getLinea();
        if ($datos['es_registro_valido']) {
            $this->archivo->es_registro_valido = true;
            ArchivoCarga::whereDate('fecha_asociada', $this->archivo->fecha_asociada)
                ->where('es_registro_valido', true)
                ->update(['es_registro_valido' => false]);
        } else {
            $this->archivo->es_registro_valido = false;
        }
        $this->archivo->update();
    }

    public function failed(Exception $exception)
    {
        \Log::info($exception->getMessage());
        \File::delete(public_path($this->archivo->archivo));
        $this->notifyToUser();
    }

    private function estadoProcesando()
    {
        $this->updateEstadoCarga([
            'estado_carga' => 'Procesando',
            'mensaje' => 'Se está cargando actualmente',
            'es_registro_valido' => false,
        ]);
    }

    private function estadoError()
    {
        $this->updateEstadoCarga([
            'estado_carga' => 'Error',
            'mensaje' => 'Error de validación',
            'es_registro_valido' => false,
        ]);
        $this->storeErrors();
    }

    private function estadoCompletado()
    {
        $this->updateEstadoCarga([
            'estado_carga' => 'Completado',
            'mensaje' => 'Se ha cargado satisfactoriamente el archivo',
            'es_registro_valido' => true,
        ]);
        $this->storeErrors();
    }

    private function storeErrors()
    {
        foreach ($this->service->getErrors() as $error) {
            $errorDB = ErrorArchivoCarga::create([
                'titulo_error' => $error['error'],
                'linea' => $error['linea'],
                'mensaje_resumen' => $error['mensaje_resumen'],
                'archivo_carga_id' => $this->archivo->id,
            ]);

            $this->storeMessages($error['mensaje_detalle'], $errorDB->id);
        }
    }

    private function storeMessages($mensajes, $id)
    {
        foreach ($mensajes as $mensaje) {
            MensajeErrorArchivoCarga::create(['error_archivo_carga_id' => $id, 'mensaje' => $mensaje]);
        }
    }

    private function notifyToUser()
    {
        event(new ProcessCsvEvent($this->archivo, $this->user));
    }

    private function getArchivo()
    {
        return ArchivoCarga::find($this->archivo->id);
    }

    private function throwException($mensaje = 'Error')
    {
        throw new Exception($mensaje, 1);
    }
}