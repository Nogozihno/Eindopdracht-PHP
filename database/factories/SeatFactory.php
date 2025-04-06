<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seat>
 */
class SeatFactory extends Factory
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
            'amount' => fake()->numberBetween(1, 10),
            'upholstery' => fake()->randomElement(['Leder', 'Stof', 'Kunstleer']),
            'assembly_time' => fake()->numberBetween(1, 10),
            'costs' => fake()->randomFloat(2, 1000, 10000),
            'image' => fake()->imageUrl(640, 480, 'seat', true, 'Faker', true)
        ];
    }
}