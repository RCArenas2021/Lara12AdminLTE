<?php

/**
 * Pruebas para verificar las rutas del CRUD dinámico.
 */

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DynamicCrudRoutesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function index_requires_authentication()
    {
        $response = $this->get('/admin/tables');
        $response->assertRedirect('/login');
    }
}
