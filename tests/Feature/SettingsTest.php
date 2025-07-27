<?php

namespace Tests\Feature;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SettingsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_can_update_settings(): void
    {
        $this->seed(\Database\Seeders\RolePermissionSeeder::class);
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $this->actingAs($admin);

        $response = $this->post(route('admin.settings.general.update'), [
            'site_name' => 'My Site',
            'maintenance_mode' => 'on',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('settings', ['key' => 'site_name', 'value' => 'My Site']);
    }
}
