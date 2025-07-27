<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

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
        $settings = Setting::all()->pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
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
        foreach ($request->only(['site_name', 'maintenance_mode']) as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        return redirect()->back()->with('status', 'Configuración actualizada');
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
