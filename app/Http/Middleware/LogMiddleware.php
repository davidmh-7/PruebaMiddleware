<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('Antes de cargar el navegador');
        return $next($request);
    }

    public function terminate($request, $response)
    {
        // Se ejecuta despues de cargar gracias a terminate
        Log::info('Después de cargar la respuesta al navegador.');
    }



}