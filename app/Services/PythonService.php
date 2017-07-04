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
        $var2 = (float)((request()->lat1)?request()->lat1:-30.321);
        $var3 = (float)((request()->lon1)?request()->lon1:-40.432);
        $var4 = (float)((request()->lat2)?request()->lat2:-45.421);
        $var5 = (float)((request()->lon2)?request()->lon2:-34.213);
        dd([$var2, $var3, $var4, $var5]);
        $output = null;
        $dato = system('python3.5 public/python/predecirTiempoViajeOk.py '.$var1.' '.$var2.' '.$var3.' '.$var4.' '.$var5, $output);
        return $output;
    }
}