<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TablePermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Controlador para manejo dinámico de CRUD por tabla.
 * Permite mostrar y modificar registros dependiendo de los permisos asignados
 * mediante la tabla table_permissions.
 */
class DynamicCrudController extends Controller
{
    /**
     * Muestra las tablas a las que el usuario tiene acceso de lectura.
     */
    public function index()
    {
        $userRoles = auth()->user()->roles->pluck('id');
        $tables = TablePermission::whereIn('role_id', $userRoles)
            ->where('can_view', true)
            ->pluck('table_name')
            ->unique();

        return view('admin.dynamic-crud.index', compact('tables'));
    }

    /**
     * Muestra el formulario para crear un nuevo registro en la tabla dada.
     */
    public function create(string $table)
    {
        $this->authorizeTable($table, 'can_create');
        $columns = Schema::getColumnListing($table);
        return view('admin.dynamic-crud.create', compact('table', 'columns'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(string $table, Request $request)
    {
        $this->authorizeTable($table, 'can_create');
        $data = $request->except('_token');
        DB::table($table)->insert($data);
        return redirect()->route('admin.dynamic-crud.show', $table);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $table)
    {
        $this->authorizeTable($table, 'can_view');
        $columns = Schema::getColumnListing($table);
        $rows = DB::table($table)->paginate(15);
        return view('admin.dynamic-crud.show', compact('table', 'columns', 'rows'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $table, $id)
    {
        $this->authorizeTable($table, 'can_update');
        $columns = Schema::getColumnListing($table);
        $row = DB::table($table)->where('id', $id)->first();
        return view('admin.dynamic-crud.edit', compact('table', 'columns', 'row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $table, $id, Request $request)
    {
        $this->authorizeTable($table, 'can_update');
        $data = $request->except('_token', '_method');
        DB::table($table)->where('id', $id)->update($data);
        return redirect()->route('admin.dynamic-crud.show', $table);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $table, $id)
    {
        $this->authorizeTable($table, 'can_delete');
        DB::table($table)->where('id', $id)->delete();
        return redirect()->route('admin.dynamic-crud.show', $table);
    }

    /**
     * Verifica que el usuario tenga permiso sobre la tabla indicada.
     */
    private function authorizeTable(string $table, string $action): void
    {
        $userRoles = auth()->user()->roles->pluck('id');
        $permission = TablePermission::where('table_name', $table)
            ->whereIn('role_id', $userRoles)
            ->where($action, true)
            ->exists();

        abort_unless($permission, 403);
    }
}
