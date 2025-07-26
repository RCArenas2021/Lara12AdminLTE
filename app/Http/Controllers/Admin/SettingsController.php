<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.index');
    }

    public function general()
    {
        return view('admin.settings.general');
    }

    public function security()
    {
        return view('admin.settings.security');
    }

    public function email()
    {
        return view('admin.settings.email');
    }

    public function backup()
    {
        return view('admin.settings.backup');
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

    public function createBackup(): Response
    {
        return response()->json(['status' => 'ok']);
    }

    public function downloadBackup(string $backup)
    {
        return response()->download(storage_path('app/'.$backup));
    }

    public function deleteBackup(string $backup): Response
    {
        return response()->json(['deleted' => $backup]);
    }
}
