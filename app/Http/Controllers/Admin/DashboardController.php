<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Controlador del panel principal de AdminLTE.
 *
 * Todas las acciones devuelven vistas ubicadas en resources/views/admin.
 */
class DashboardController extends Controller
{
    /**
     * Muestra la página principal del panel de administración.
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Muestra la versión alternativa del dashboard basada en index2.html.
     */
    public function dashboardV2()
    {
        return view('admin.dashboard-v2');
    }

    /**
     * Muestra la tercera versión del dashboard basada en index3.html.
     */
    public function dashboardV3()
    {
        return view('admin.dashboard-v3');
    }
}
