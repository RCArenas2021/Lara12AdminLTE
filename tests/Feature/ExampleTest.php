<?php

/**
 * Pruebas de ejemplo para la aplicación.
 *
 * Última modificación: 26-07-2025 por ChatGPT
 */

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Ejemplo básico de prueba.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
