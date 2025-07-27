<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Registrar middleware personalizado de actividad
        $middleware->alias([
            'activity' => \App\Http\Middleware\LogActivity::class,
        ]);
        $middleware->appendToGroup('web', 'activity');
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Aquí puedes manejar las excepciones de la aplicación
    })->create();
