<?php

namespace App\Services;

use App\Events\ProcessCsvEvent;
use App\Services\CsvReader;
use App\User;
use App\ArchivoCarga;
use App\ErrorArchivoCarga;
use App\MensajeErrorArchivoCarga;
use DB;

class CsvStore
{
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

    public function run()
    {
        $this->estadoProcesando();

        
        if (!$this->service->openFile()) {
            $this->deleteFile();
            $this->notifyToUser();

            return $this->estadoError();
        }

        //DB::beginTransaction();
        $this->service->deleteData();

        if (!$this->service->readFile()) {
            //DB::rollback();
            $this->deleteFile();
            $this->notifyToUser();

            return $this->estadoError();
        }

        //DB::commit();
        $this->notifyToUser();
        return $this->estadoCompletado();
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
        return $this->archivo->update();
    }

    public function deleteFile()
    {
        \File::delete(public_path($this->archivo->archivo));
    }

    private function estadoProcesando()
    {
        $estado = $this->updateEstadoCarga([
            'estado_carga' => 'Procesando',
            'mensaje' => 'Se está cargando actualmente',
            'es_registro_valido' => false,
        ]);
        return $estado;
    }

    private function estadoError()
    {
        $estado = $this->updateEstadoCarga([
            'estado_carga' => 'Error',
            'mensaje' => 'Error en el proceso de carga del archivo',
            'es_registro_valido' => false,
        ]);
        $this->storeErrors();
        return $estado;
    }

    private function estadoCompletado()
    {
        $estado = $this->updateEstadoCarga([
            'estado_carga' => 'Completado',
            'mensaje' => 'Se ha cargado satisfactoriamente el archivo',
            'es_registro_valido' => true,
        ]);
        $this->storeErrors();
        return $estado;
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
}