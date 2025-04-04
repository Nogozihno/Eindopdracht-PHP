<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wheel>
 */
class WheelFactory extends Factory
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
            'type_of_tire' => fake()->randomElement(['Winterband', 'Zomerband']),
            'diameter' => fake()->randomFloat(2, 15, 20), // Should be integers, not strings
            'amount' => fake()->randomElement([2, 4, 6, 8]), 
            'compatible_with_chassis' => fake()->randomElement(['Step', 'Fiets', 'Scooter', 'Personenauto', 'Vrachtwagen', 'Bus']),
            'assembly_time' => fake()->numberBetween(1, 10),
            'costs' => fake()->randomFloat(2, 1000, 10000),
            'image' => fake()->imageUrl(640, 480, 'wheel', true, 'Faker', true)
        ];
    }
}