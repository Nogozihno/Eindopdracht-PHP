<?php

namespace Database\Seeders;

use App\Models\Chassis;
use Illuminate\Database\Seeder;

class ChassisSeeder extends Seeder
{
    public function run(): void {
        Chassis::factory(10)->create();
                // Chassis::factory()->create([
                //     'name' => 'Test Chassis',
                //     'number_of_wheels' => 4,
                //     'type_of_vehicle' => 'Car',
                //     'size' => [
                //         'l' => 400,
                //         'B' => 186,
                //         'H' => 165,
                //     ],
                //     'assembly_time' => 2,
                //     'costs' => 4400,
                //     'image' => 'https://example.com/image.jpg',
                // ]);
    }
}