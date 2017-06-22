<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filters\Filterable;

class MensajeErrorArchivoCarga extends Model
{
    use Filterable;

    public $timestamps = false;

    protected $fillable = [
        'error_archivo_carga_id',
        'mensaje',
    ];
}
