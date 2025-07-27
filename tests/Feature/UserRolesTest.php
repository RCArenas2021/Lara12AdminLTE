<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserRolesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_can_create_user_with_role(): void
    {
        // Ejecutamos seeder de roles
        $this->seed(\Database\Seeders\RolePermissionSeeder::class);

        // Usuario administrador
        $admin = User::factory()->create();
        $admin->assignRole('super-admin');

        $this->actingAs($admin);

        // Enviamos datos de nuevo usuario
        $response = $this->post(route('admin.users.store'), [
            'name' => 'Usuario Prueba',
            'email' => 'test@example.com',
            'password' => 'secretpwd',
            'password_confirmation' => 'secretpwd',
            'role' => 'admin',
        ]);

        $response->assertRedirect(route('admin.users.index'));
        $this->assertDatabaseHas('users', ['email' => 'test@example.com']);
        $user = User::where('email', 'test@example.com')->first();
        $this->assertTrue($user->hasRole('admin'));
    }
}
