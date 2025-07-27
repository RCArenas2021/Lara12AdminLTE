<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Registrar cualquier servicio de la aplicación.
     */
    public function register(): void
    {
        // Aquí puedes registrar servicios personalizados
    }

    /**
     * Inicializar cualquier servicio de la aplicación.
     */
    public function boot(): void
    {
        // Aquí puedes añadir lógica de arranque
    }
}
