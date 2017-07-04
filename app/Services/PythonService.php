<?php 

namespace App\Services;

use Illuminate\Http\Request;
use Carbon\Carbon;
/**
* Clase para python por consola.
*/

class PythonService
{
    public function callTrain()
    {
        system('python3.5 public/python/admin_train_P2.py');
    }

    public function callDato(Request $request)
    {
        $var1 = Carbon::now()->toDateTimeString();
        $var2 = -30.321;
        $var3 = -40.432;
        $var4 = -45.421;
        $var5 = -34.213;
        $output = null;
        $dato = system('python3.5 public/python/predecirTiempoViajeOk.py '.$var1.' '.$var2.' '.$var3.' '.$var4.' '.$var5, $output);
        return $output;
    }
}