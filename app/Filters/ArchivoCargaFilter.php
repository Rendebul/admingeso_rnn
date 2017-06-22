<?php

namespace App\Filters;

use Carbon\Carbon;

class ArchivoCargaFilter extends QueryFilter
{
    public function tipo($value = null)
    {
        return $this->builder->where('tipo_archivo', 'ilike', "%$value%");
    }

    public function usuario($value = null)
    {
        return $this->builder->whereHas('user', function ($q) use ($value) {
            $q->where('name', 'ilike', "%$value%");
        });
    }

    public function estado($value = null)
    {
        return $this->builder->where('estado_carga', 'ilike', "$value");
    }

    public function fechaAsociada($value = null)
    {
        $fecha = Carbon::createFromFormat('m-Y', $value);
        $fecha->day = 1;
        return $this->builder->whereDate('fecha_asociada', $fecha);
    }
}
