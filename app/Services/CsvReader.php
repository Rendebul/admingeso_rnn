<?php

namespace App\Services;

use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Carbon\Carbon;

abstract class CsvReader
{
    protected $columnas;
    protected $filename;
    protected $tablename;
    protected $each;

    protected $file;
    protected $rules;
    protected $fecha_asociada;
    protected $line;
    protected $errors;

    public function assignAttributes($archivoCarga)
    {
        $this->filename = public_path($archivoCarga->archivo);
        $this->fecha_asociada = $archivoCarga->fecha_asociada;
        $this->errors = collect([]);
    }

    public function getColumnasEsperadas()
    {
        return $this->columnas;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getLinea()
    {
        return $this->line;
    }

    public function openFile()
    {
        $this->file = fopen($this->filename, 'r');
        if ($this->file == null) {
            $this->genMensajeErrorArchivo();
            return $this->exitFailure();
        }

        return true;
    }

    public function readFile()
    {
        try {
            $this->line = DB::statement(
                'COPY ' .
                $this->tablename .
                '('. implode(',', collect($this->rules)->keys()->all()) . ') ' .
                ' FROM \'' . $this->filename . '\' ' .
                ' WITH (' .
                ' FORMAT CSV,' .
                ' DELIMITER \';\',' .
                ' HEADER true,' .
                ' NULL \'\',' .
                ' ENCODING \'WIN1252\'' .
                ');'
            );
        } catch (QueryException $e) {
            $this->genMensajeErrorCopia([$e->getMessage()]);
            return $this->exitFailure();
        }
        $this->line++;
        return $this->exitSuccess();
    }

    public function deleteData()
    {
        //DB::table($this->tablename)->whereDate('fecha_carga_archivo_csv', $this->fecha_asociada)->delete();
    }

    protected function genMensajeErrorValidacion($mensajesError)
    {
        $linea = $this->line + 1;
        $error = [
            'error' => 'Error de Validación',
            'linea' => $linea,
            'mensaje_resumen' => 'Error de validación al intentar guardar el registro ' . $linea . '.',
            'mensaje_detalle' => collect($mensajesError),
        ];
        $this->errors->push($error);
    }

    protected function genMensajeErrorCopia($mensajesError)
    {
        $error = [
            'error' => 'Error durante copia',
            'linea' => 0,
            'mensaje_resumen' => 'Error durante copia al leer el archivo csv.',
            'mensaje_detalle' => collect($mensajesError),
        ];
        $this->errors->push($error);
    }

    protected function genMensajeErrorColInicial($columnas)
    {
        $this->errors->push([
            'error' => 'Columna Inicial',
            'linea' => $this->line,
            'mensaje_resumen' => 'La cantidad de columnas del archivo no coincide con esperada',
            'mensaje_detalle' => collect([
                'Columnas esperadas: ' . $this->columnas . '. ' .
                'Columnas recibidas: ' . $columnas,
            ]),
        ]);
    }

    protected function genMensajeErrorColRegistro($columnas)
    {
        $linea = $this->line + 1;
        $this->errors->push([
            'error' => 'Columna registro',
            'linea' => $linea,
            'mensaje_resumen' => 'Un registro tiene una cantidad de columnas distinta a la esperada.',
            'mensaje_detalle' => collect([
                'Columnas esperadas: ' . $this->columnas  . '. ' .
                'Columnas recibidas: ' . $columnas,
            ]),
        ]);
    }

    protected function genMensajeErrorArchivo()
    {
        $this->errors->push([
            'error' => 'Abrir archivo',
            'linea' => 0,
            'mensaje_resumen' => 'Error al abrir el archivo',
            'mensaje_detalle' => collect([
                'Mensaje del sistema: ' . error_get_last()['message'],
            ]),
        ]);
    }
    protected function exitFailure()
    {
        fclose($this->file);
        return false;
    }

    protected function exitSuccess()
    {
        fclose($this->file);
        return true;
    }
    protected function dateMultiFormat($formats, $value)
    {
        foreach ($formats as $format) {
            $parsed = date_parse_from_format($format, $value);
            if ($parsed['error_count'] === 0 && $parsed['warning_count'] === 0) {
                return Carbon::createFromFormat($format, $value)->toDateTimeString();
            }
        }
        return null;
    }
}