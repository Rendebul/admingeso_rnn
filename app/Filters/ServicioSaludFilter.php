<?php

namespace App\Filters;

class ServicioSaludFilter extends QueryFilter
{
    public function name($value = null)
    {
        return $this->builder->where('name', 'ilike', "%$value%");
    }

    public function code($value = null)
    {
        return $this->builder->where('code', 'ilike', "%$value%");
    }

    public function region($value = null)
    {
        return $this->builder->whereHas('region', function ($q) use ($value) {
            $q->where('name', 'ilike', "%$value%");
        });
    }
}
