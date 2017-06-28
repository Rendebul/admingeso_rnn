<?php 
namespace App\Services;

use App\Datos;
use App\RutaModel;

class FixerDatos 
{
    public function iterarDatos()
    {
        $placas = Datos::all();

        $rms = [];

        $ant = 'A';
        $placa_anterior = ' ';
        $contador = 1;
        echo "Testearé iterar";
        $rm = false;
        $cod_anterior = ' ';
        foreach ($placas as $dato) {
            if($placa_anterior != $dato->placaprefixo OR $ant != $dato->direcao OR $cod_anterior != $dato->codrota) {
                if($rm) {
                    $rms[] = $rm;
                }
                $rm = new RutaModel();        
                $rm->addDato($dato);
                $ant = $dato->direcao;
                $placa_anterior = $dato->placaprefixo;
                $cod_anterior = $dato->codrota;    
            } else {
                $rm->addDato($dato);    
            }
            //echo ($contador);
            //echo "\n";
            $contador++;
        }
        $ctdad = count($rms);
        echo 'Recorridos totales: ' . $ctdad;
        echo "\n";
        $kmt = 0;
        $i = 1;

        $rango = $this->calculoMedia($rms);

        var_dump($rango);
        $this->borrarFueraRango($rms, $rango);
        /*foreach($rms as $recorrido) {
            //echo "Reco ".$i.":" . $recorrido->km;
            //echo "\n";
            if($i==2350)
            {
                echo "Recorrido Raro: " . $i;
                echo "\n";
                var_dump($recorrido->km);
                echo "\n";
                echo "Recalcular \n";
                var_dump($recorrido->primero());
                var_dump($recorrido->ultimo());
                echo $recorrido->km;
            }
            $kmt += $recorrido->km;
            //echo "Kmt acum: " . $kmt;
            //echo "\n";
            $i++;
        }*/
        return true;
    }

    private function calculoMedia($datos)
    {
        $hasher = [];
        foreach ($datos as $dato) {
            var_dump($dato->km);
            $key = round($dato->km);
            if (isset($hasher[$key])) {
                $hasher[$key] += 1;
            } else {
                $hasher[$key] = 1;
            }
        }
        $mayor = 0;
        $llave_mayor = 0;
        foreach ($hasher as $key => $hash) {
            if ($hash > $mayor) {
                $mayor = $hash;
                $llave_mayor = $key;
            }
        }
        var_dump($hasher);
        return ['mayor' => $mayor, 'kms' => $llave_mayor];
    }

    private function borrarFueraRango($rms, $rango) {
        $kms_i = $rango['kms'] - 2;
        $kms_s = $rango['kms'] + 2;
        echo 'Rango: menor:' . $kms_i . ' mayor:' . $kms_s . "\n";
        foreach ($rms as $recorrido) {
            if($kms_i > $recorrido->km || $kms_s < $recorrido->km) {
                echo 'Borraré km ' . $recorrido->km;
                echo "\n";
                $recorrido->borrar();
            }
        }
    }
}
