<?php 

namespace App\Services;
/**
* Clase para python por consola.
*/

class PythonService
{
    public function callTrain()
    {
        system('python public/train.py');
    }

    public function callDato(Request $request)
    {
        $var1 = 530;
        $var2 = -30.321;
        $var3 = -40.432;
        $var4 = -45.421;
        $var5 = -34.213;
        $output = null;
        $dato = system('python public/test.py '.$var1.' '.$var2.' '.$var3.' '.$var4.' '.$var5, $output);
        return $output;
    }
}