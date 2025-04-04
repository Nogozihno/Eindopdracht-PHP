<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Drive>
 */
class DriveFactory extends Factory
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
            'type_of_drive' => fake()->randomElement(['Waterstof', 'Elektrisch']),
            'horsepower' => fake()->numberBetween(50, 500), // Should be integers, not strings
            'assembly_time' => fake()->numberBetween(1, 10),
            'costs' => fake()->randomFloat(2, 1000, 10000),
            'image' => fake()->imageUrl(640, 480, 'drive', true, 'Faker', true)
        ];
    }
}