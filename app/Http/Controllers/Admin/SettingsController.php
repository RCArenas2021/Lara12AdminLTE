<?php

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

    public function general()
    {
        return view('admin.settings.index');
    }

    public function security()
    {
        return view('admin.settings.index');
    }

    public function email()
    {
        return view('admin.settings.index');
    }

    public function backup()
    {
        return view('admin.settings.index');
    }

    public function updateGeneral(Request $request)
    {
        return redirect()->back();
    }

    public function updateSecurity(Request $request)
    {
        return redirect()->back();
    }

    public function updateEmail(Request $request)
    {
        return redirect()->back();
    }

    public function createBackup()
    {
        return redirect()->back();
    }

    public function downloadBackup($backup)
    {
        return response()->download(storage_path('app/' . $backup));
    }
}
