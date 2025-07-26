<?php

/**
 * Comandos de consola de la aplicación.
 *
 * Última modificación: 26-07-2025 por ChatGPT
 */

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
