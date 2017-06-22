<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filters\Filterable;

class ErrorArchivoCarga extends Model
{
    use Filterable;

    public $timestamps = false;

    protected $fillable = [
        'archivo_carga_id',
        'titulo_error',
        'linea',
        'mensaje_resumen',
    ];

    public function mensajes()
    {
        return $this->hasMany(MensajeErrorArchivoCarga::class, 'error_archivo_carga_id');
    }
}
