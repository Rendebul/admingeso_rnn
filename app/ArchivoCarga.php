<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filters\Filterable;

class ArchivoCarga extends Model
{
    use Filterable;

    protected $fillable = [
        'user_id',
        'tipo_archivo',
        'archivo',
        'estado_carga',
        'mensaje',
        'fecha_asociada',
        'registros_leidos',
        'es_registro_valido',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function errores()
    {
        return $this->hasMany(ErrorArchivoCarga::class, 'archivo_carga_id');
    }
}