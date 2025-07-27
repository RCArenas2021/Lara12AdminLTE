<?php

namespace Database\Factories;

use App\Models\TablePermission;
use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\Permission\Models\Role;

class TablePermissionFactory extends Factory
{
    protected $model = TablePermission::class;

    public function definition(): array
    {
        return [
            'table_name' => $this->faker->word(),
            'role_id' => Role::factory(),
            'can_view' => true,
            'can_create' => $this->faker->boolean(),
            'can_update' => $this->faker->boolean(),
            'can_delete' => $this->faker->boolean(),
        ];
    }
}
