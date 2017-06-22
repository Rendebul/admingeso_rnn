<?php

namespace App\Services;

use Carbon\Carbon;

class DatosService extends CsvReader
{
    protected $columnas = 6;
    protected $each = 1000;
    protected $tablename = 'datos';
    public $rules = [
        'PlacaPrefixo' => 'required',
        'DataHora' => 'required',
        'CodRota' => 'required',
        'Direcao' => 'required',
        'Latitude' => 'required',
        'Longitude' => 'required'
    ];

    public function assign($line)
    {
        $line['PlacaPrefixo'] = $line['PlacaPrefixo'];
        $line['DataHora'] = $line['DataHora'];
        $line['CodRota'] = $line['CodRota'];
        $line['Direcao'] = $line['Direcao'];
        $line['Latitude'] = $line['Latitude'];
        $line['Longitude'] = $line['Longitude'];

        return $line;
    }

    private function zeroIfEmpty($value)
    {
        if ($value == null || $value == '') {
            return '0';
        }
        return $value;
    }
}