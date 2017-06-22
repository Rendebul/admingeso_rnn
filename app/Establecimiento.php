<?php

namespace App;

use App\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use Filterable;

    protected $fillable = [
        'name',
        'code',
        'comuna_id',
    ];

    public function comuna()
    {
        return $this->belongsTo(Comuna::class);
    }

    public function scopeGetCodesById($query, $establecimientosId = [])
    {
        return $query->select('code')->whereIn('id', $establecimientosId)->get()->pluck('code');
    }
}
