<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chassis>
 */
class ChassisFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'number_of_wheels' => fake()->randomElement([2, 4, 6, 8]), // Should be integers, not strings
            'type_of_vehicle' => fake()->randomElement(['Step', 'Fiets', 'Scooter', 'Personenauto', 'Vrachtwagen', 'Bus']),
            'size' =>'l: ' . fake()->numberBetween(100, 500). ' ,B: ' . fake()->numberBetween(50, 300) . ' ,H: ' . fake()->numberBetween(20, 200),
            'assembly_time' => fake()->numberBetween(1, 10),
            'costs' => fake()->randomFloat(2, 1000, 10000),
            'image' => fake()->imageUrl(640, 480, 'chassis', true, 'Faker', true),
        ];
    }
}