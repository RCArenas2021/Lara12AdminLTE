<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Roles y permisos básicos
        $this->call(RolePermissionSeeder::class);

        // Ejecutar seeder de usuarios con roles
        $this->call(UserSeeder::class);
    }
}
