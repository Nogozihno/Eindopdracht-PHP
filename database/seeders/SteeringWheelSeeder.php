<?php

namespace Database\Seeders;

use App\Models\SteeringWheel;
use Illuminate\Database\Seeder;

class SteeringWheelSeeder extends Seeder
{
    public function run(): void{
        SteeringWheel::factory(10)->create();
        // SteeringWheel::factory()->create([
        //     'name' => 'Test Steering Wheel',
        //     'type_of_steering_wheel' => 'Leather',
        //     'assembly_time' => 2,
        //     'costs' => 1500,
        //     'image' => 'https://example.com/image.jpg',
        // ]);
    }
}