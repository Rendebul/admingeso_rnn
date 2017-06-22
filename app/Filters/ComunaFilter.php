<?php

namespace App\Filters;

class ComunaFilter extends QueryFilter
{
    public function name($value = null)
    {
        return $this->builder->where('name', 'ilike', "%$value%");
    }

    public function code($value = null)
    {
        return $this->builder->where('code', 'ilike', "%$value%");
    }

    public function servicio($value = null)
    {
        return $this->builder->whereHas('servicio', function ($q) use ($value) {
            $q->where('name', 'ilike', "%$value%");
        });
    }
}
