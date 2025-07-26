<?php

/**
 * Controlador para operaciones CRUD de usuarios.
 *
 * Última modificación: 26-07-2025 por ChatGPT
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Controlador para la gestión de usuarios del panel administrativo.
 *
 * Contiene operaciones CRUD básicas y se puede extender según las necesidades.
 */
class UserController extends Controller
{
    /**
     * Muestra un listado de usuarios.
     */
    public function index()
    {
        // Aquí iría la lógica para obtener usuarios de la base de datos
        // y pasarlos a la vista.
        return view('admin.users.index');
    }

    /**
     * Muestra el formulario para crear un nuevo usuario.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Guarda un nuevo usuario en la base de datos.
     */
    public function store(Request $request)
    {
        // Validar y crear usuario
        // User::create($request->all());
        return redirect()->route('admin.users.index');
    }

    /**
     * Muestra la información de un usuario específico.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Muestra el formulario para editar un usuario existente.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Actualiza la información del usuario en la base de datos.
     */
    public function update(Request $request, User $user)
    {
        // $user->update($request->all());
        return redirect()->route('admin.users.index');
    }

    /**
     * Elimina un usuario de la base de datos.
     */
    public function destroy(User $user)
    {
        // $user->delete();
        return redirect()->route('admin.users.index');
    }
}
