<?php

namespace App\Http\Middleware;

use Closure;

class ThrottleAjaxRequests extends \Illuminate\Routing\Middleware\ThrottleRequests
{

    protected function buildResponse($key, $maxAttempts)
    {
        return response()->json(['email' => ["Has realizado muchos intentos en un periodo muy corto ({$maxAttempts} intentos por minuto)"]], 429);
    }
}
