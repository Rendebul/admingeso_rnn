<?php

namespace App\Filters;

class RegionFilter extends QueryFilter
{
    public function name($value = null)
    {
        return $this->builder->where('name', 'ilike', "%$value%");
    }

    public function code($value = null)
    {
        return $this->builder->where('code', 'ilike', "%$value%");
    }
}
