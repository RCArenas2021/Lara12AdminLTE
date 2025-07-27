<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;

/**
 * Controlador para visualizar la bitácora de actividades.
 * Creado: 2025-07-27
 */
class ActivityLogController extends Controller
{
    /**
     * Muestra la bitácora de actividades.
     */
    public function __invoke()
    {
        $logs = ActivityLog::with('user')->latest()->paginate(20);
        return view('admin.logs.index', compact('logs'));
    }
}
