<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        return redirect()->route('admin.users.index');
    }

    public function activate(User $user)
    {
        return redirect()->route('admin.users.index');
    }

    public function deactivate(User $user)
    {
        return redirect()->route('admin.users.index');
    }

    public function profile(User $user)
    {
        return view('admin.users.profile', compact('user'));
    }

    public function search(Request $request): Response
    {
        return response()->json([]);
    }
}
