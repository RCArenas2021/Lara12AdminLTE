<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Insert default application settings.
     */
    public function run(): void
    {
        \App\Models\Setting::updateOrCreate(
            ['key' => 'site_name'],
            ['value' => 'AdminLTE App']
        );

        \App\Models\Setting::updateOrCreate(
            ['key' => 'maintenance_mode'],
            ['value' => 'off']
        );
    }
}
