<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SteeringWheel>
 */
class SteeringWheelFactory extends Factory
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
            'special_adjustment' => fake()->randomElement(['Schapenvacht', 'Leer', 'Stof']),
            'shape' => fake()->randomElement(['Rond', 'Vierkant', 'Stang', 'achthoekig']),
            'assembly_time' => fake()->numberBetween(1, 10),
            'costs' => fake()->randomFloat(2, 1000, 10000),
            'image' => fake()->imageUrl(640, 480, 'steeringwheel', true, 'Faker', true)
        ];
    }
}