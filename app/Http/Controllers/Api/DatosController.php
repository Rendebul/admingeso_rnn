<?php
namespace App\Http\Controllers\Api;

ini_set('max_execution_time', 3000);
use Illuminate\Http\Request;
use App\Services\FixerDatos;
use App\Services\PythonService;
use App\Http\Controllers\ApiController;

class DatosController extends ApiController
{
    public function fix()
    {
        $f = new FixerDatos();
        return $f->iterarDatos();
    }

    public function callDato(Request $request)
    {
        $ps = new PythonService();
        return $ps->callDato($request);
    }
}
