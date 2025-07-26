<?php

/**
 * Controlador de configuraciones del sistema.
 *
 * Última modificación: 26-07-2025 por ChatGPT
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Controlador encargado de la configuración general del sistema.
 */
class SettingsController extends Controller
{
    /**
     * Muestra la página principal de configuraciones.
     */
    public function index()
    {
        return view('admin.settings.index');
    }
}
