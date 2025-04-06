<?php

namespace Database\Seeders;

use App\Models\Drive;
use Illuminate\Database\Seeder;

class DriveSeeder extends Seeder
{
    public function run(): void {
        Drive::factory(10)->create();
                // Drive::factory()->create([
                //     'name' => 'Test Drive',
                //     'type_of_drive' => 'AWD',
                //     'horsepower' => 300,
                //     'assembly_time' => 3,
                //     'costs' => 5000,
                //     'image' => 'https://example.com/image.jpg',
                // ]);
    }
}