<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * Seeder para roles y permisos base
 * Creado 2025-07-27
 */
class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = ['manage users', 'view logs', 'manage settings'];
        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        $super = Role::firstOrCreate(['name' => 'super-admin']);
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $compliance = Role::firstOrCreate(['name' => 'compliance']);
        $user = Role::firstOrCreate(['name' => 'user']);

        $super->syncPermissions($permissions);
        $admin->syncPermissions(['manage users', 'manage settings']);
        $compliance->syncPermissions(['view logs']);
    }
}
