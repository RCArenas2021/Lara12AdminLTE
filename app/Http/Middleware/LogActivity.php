<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\ActivityLog;

/**
 * Middleware para registrar actividad de usuario
 * Creado: 2025-07-27
 */
class LogActivity
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (auth()->check()) {
            ActivityLog::create([
                'user_id' => auth()->id(),
                'method' => $request->method(),
                'url' => $request->fullUrl(),
                'ip_address' => $request->ip(),
                'user_agent' => substr($request->userAgent() ?? '', 0, 255),
                'payload' => json_encode($request->except(['password', 'password_confirmation'])),
            ]);
        }

        return $response;
    }
}
