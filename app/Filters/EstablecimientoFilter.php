<?php

namespace App\Filters;

class EstablecimientoFilter extends QueryFilter
{
    public function name($value = null)
    {
        return $this->builder->where('name', 'ilike', "%$value%");
    }

    public function code($value = null)
    {
        return $this->builder->where('code', 'ilike', "%$value%");
    }

    public function comuna($value = null)
    {
        return $this->builder->whereHas('comuna', function ($q) use ($value) {
            $q->where('name', 'ilike', "%$value%");
        });
    }
}
