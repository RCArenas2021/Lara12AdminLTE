<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

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
        // Listamos usuarios junto con sus roles
        $users = User::with('roles')->get();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Muestra el formulario para crear un nuevo usuario.
     */
    public function create()
    {
        // Pasamos lista de roles disponibles a la vista
        $roles = Role::pluck('name', 'id');

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Guarda un nuevo usuario en la base de datos.
     */
    public function store(StoreUserRequest $request)
    {
        // Validamos los datos recibidos
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed',
            'role' => 'required|exists:roles,name',
        ]);

        // Creamos el usuario y asignamos el rol indicado
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user->assignRole($data['role']);

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
        // Roles disponibles para asignar
        $roles = Role::pluck('name', 'id');

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Actualiza la información del usuario en la base de datos.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // Validamos datos
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|confirmed',
            'role' => 'required|exists:roles,name',
        ]);

        // Actualizamos atributos básicos
        $user->name = $data['name'];
        $user->email = $data['email'];
        if (!empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }
        //$user->update($request->validated());
        $user->save();

        // Sincronizamos el rol
        $user->syncRoles([$data['role']]);

        // Redirigimos al listado de usuarios
        return redirect()->route('admin.users.index');
    }

    /**
     * Elimina un usuario de la base de datos.
     */
    public function destroy(User $user)
    {
        // Eliminamos el usuario de la base de datos
        $user->delete();

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
