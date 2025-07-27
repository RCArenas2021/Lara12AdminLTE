<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $super = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        $super->assignRole('super-admin');

        $admin = User::factory()->create([
            'name' => 'Administrador',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole('admin');

        User::factory()->count(3)->create()->each(function ($user) {
            $user->assignRole('user');
        });
    }
}
