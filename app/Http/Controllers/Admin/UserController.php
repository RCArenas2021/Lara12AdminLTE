<?php

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

    /**
     * Activa un usuario (ejemplo básico).
     */
    public function activate(User $user)
    {
        // $user->update(['active' => true]);
        return redirect()->route('admin.users.index');
    }

    /**
     * Desactiva un usuario.
     */
    public function deactivate(User $user)
    {
        // $user->update(['active' => false]);
        return redirect()->route('admin.users.index');
    }

    /**
     * Muestra el perfil de un usuario.
     */
    public function profile(User $user)
    {
        return view('admin.users.profile', compact('user'));
    }

    /**
     * Búsqueda básica de usuarios para AJAX.
     */
    public function search(Request $request)
    {
        $query = $request->get('q');
        $users = User::where('name', 'like', "%{$query}%")->get();
        return response()->json($users);
    }
}
