<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filters\Filterable;

class Comuna extends Model
{
    use Filterable;

    protected $fillable = [
        'name',
        'code',
        'servicio_id'
    ];

    public function servicio()
    {
        return $this->belongsTo(ServicioSalud::class, 'servicio_id');
    }

    public function establecimientos()
    {
        return $this->hasMany(Establecimiento::class);
    }
}
