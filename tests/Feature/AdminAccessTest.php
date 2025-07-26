<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class AdminAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_access_dashboard(): void
    {
        $role = Role::create(['name' => 'admin']);
        $user = User::factory()->create();
        $user->assignRole($role);

        \Illuminate\Support\Facades\Route::middleware('role:admin')->get('/dummy', fn () => 'ok');

        $response = $this->actingAs($user)->get('/dummy');
        $response->assertStatus(200);
    }

    public function test_user_without_role_cannot_access_dashboard(): void
    {
        $user = User::factory()->create();
        \Illuminate\Support\Facades\Route::middleware('role:admin')->get('/dummy', fn () => 'ok');
        $response = $this->actingAs($user)->get('/dummy');
        $response->assertStatus(403);
    }
}
