<?php

namespace App;

use Location\Coordinate;
use Location\Distance\Vincenty;

class RutaModel
{
    private $datos;
    public $km;

    public function __construct()
    {
        $this->datos = [];
        $this->km = 0;
    }

    public function addDato($dato)
    {
        $this->datos[] = $dato;
        if(count($this->datos)>1) {
            $cont = count($this->datos)-1;
            $coordO = new Coordinate((float)str_replace(",",".",($this->datos[$cont-1]->latitude)),(float)str_replace(",",".",($this->datos[$cont-1]->longitude)));
            $coordD = new Coordinate((float)str_replace(",",".",($this->datos[$cont]->latitude)),(float)str_replace(",",".",($this->datos[$cont]->longitude)));
            $calculate = new Vincenty();
            $this->km += ($calculate->getDistance($coordO,$coordD)/1000);
            //echo $this->km; 
        }
    }

    public function recalcular()
    {
        $this->km = 0;
        $anterior = false;
        $calculate = new Vincenty();
        echo "Tamanio: ". count($this->datos);
        foreach ($this->datos as $dato) {
            if($anterior) {
                $act = new Coordinate((float)str_replace(",",".",($dato->latitude)),(float)str_replace(",",".",($dato->longitude)));
                $this->km += ($calculate->getDistance($anterior,$act)/1000);
                $anterior = $act;
            } else {
                $anterior = new Coordinate((float)str_replace(",",".",($dato->latitude)),(float)str_replace(",",".",($dato->longitude)));
            }
        }
    }

    public function primero()
    {
        return $this->datos[0];
    }

    public function ultimo()
    {
        return $this->datos[count($this->datos)-1];
    }

    public function borrar()
    {
        foreach ($this->datos as $dato) {
            $dato->delete();
        }
    }
}
