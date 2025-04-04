<?php

namespace Database\Seeders;

use App\Models\Wheel;
use Illuminate\Database\Seeder;

class WheelSeeder extends Seeder
{
    public function run(): void
    {
        Wheel::factory(10)->create();
        // Wheel::factory()->create([
        //     'name' => 'Test Wheel',
        //     'type_of_tire' => 'All Season',
        //     'diameter' => 18,
        //     'amount' => 4,
        //     'compatible_with_chassis' => 'Chassis Model A',
        //     'assembly_time' => 1,
        //     'costs' => 2000,
        //     'image' => 'https://example.com/image.jpg',
        // ]);
    }
}