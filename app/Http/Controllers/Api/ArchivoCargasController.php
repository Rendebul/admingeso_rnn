<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\ArchivoCarga;
use App\ErrorArchivoCarga;
use App\Notifications\WelcomeNotification;
use App\Filters\ArchivoCargaFilter;
use App\Http\Requests;
use App\Http\Controllers\ApiController;
use App\Services\CsvStore;
use App\Services\DatosService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ArchivoCargasController extends ApiController
{
    protected $folder = 'archivo_cargas';

    public function index(ArchivoCargaFilter $filter)
    {
        return ArchivoCarga::orderBy('created_at', 'desc')
            ->with(['user' => function ($q) {
                $q->select('id', 'name');
            }])
            ->filter($filter)
            ->paginate();
    }

    public function store(Request $request)
    {
	//dd($request);
        $this->validate($request, [
            'tipo_archivo'  => 'required|string|max:255',
            'file'          => 'required|file',
            'mes'           => 'required|numeric|between:1,12',
            'anho'          => 'required|numeric|between:1900,3000',
        ]);

        $path = $this->path();
        //dd($request->all());
        $filename = $this->filename($request->file('file'));
        $request['archivo'] = $path . $filename;
        $request['user_id'] = $request->user()->id;
        $request['estado_carga'] = 'En cola';
        $request['mensaje'] = 'Archivo en espera para ser cargado al sistema';
        $request['fecha_asociada'] = Carbon::createFromDate($request['anho'], $request['mes'], 1);
        $archivoCarga = ArchivoCarga::create($request->except('file'));

        $service = null;
        if ($archivoCarga->tipo_archivo == 'datos') {
            $service = new DatosService();
            $service->assignAttributes($archivoCarga);
        } 
        
        if (!$service) {
            $request['estado_carga'] = 'Error';
            $request['mensaje'] = 'Error de tipo de archivo';
            return $this->respondWithInternalServerError('Tipo Archivo no corresponde con las opciones seleccionadas');
        }
        $request->file('file')->move($path, $filename);
        $job = new CsvStore($service, Auth::user(), $archivoCarga);
        $archivoResultado = (new CsvStore($service, Auth::user(), $archivoCarga))->run();
        if ($archivoResultado != 'Completado') {
            return $this->respondWithInternalServerError($archivoResultado->errores->titulo_error);
        }
        return $this->respondStore('Archivo cargado en el sistema');
    }

    public function destroy(ArchivoCarga $archivoCarga)
    {
        \File::delete(public_path($archivoCarga->archivo));
        $archivoCarga->delete();

        return $this->respondDestroy();
    }

    private function path()
    {
        return $this->folder . '/';
    }

    private function filename($file)
    {
        return uniqid() . '.' . $file->getClientOriginalExtension();
    }

    public function show(ArchivoCarga $archivoCarga)
    {
        $datos = $archivoCarga->load([
            'user' => function ($q) {
                $q->addSelect(['id', 'name']);
            },
        ]);
        $datos['cantidadErrores'] = ErrorArchivoCarga::where('archivo_carga_id', $archivoCarga->id)->count();
        return $datos;
    }

    public function getErrores($idArchivo)
    {
        return ErrorArchivoCarga::where('archivo_carga_id', $idArchivo)
            ->with('mensajes')
            ->limit(10)
            ->get();
    }
}
