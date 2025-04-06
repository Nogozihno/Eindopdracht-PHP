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

        // $compatible = ''; // Initialize the variable to avoid undefined variable error
        // for ($i = 0; $i < ($random = random_int(1, 3)); $i++) {
        //     $a = array('Step', 'Fiets', 'Scooter', 'Personenauto', 'Vrachtwagen', 'Bus');
        //     if ($i == 0) {
        //         $compatible = ($single_item = fake()->randomElement($a));
        //         $item_index = array_search($single_item, $a);
        //         if ($item_index !== false) {
        //             unset($a[$item_index]); // Unset the single item to avoid duplication in the loop
        //         }
        //     } elseif ($i == $random) {
        //         $compatible = $compatible . ($single_item = fake()->randomElement($a));
        //         $item_index = array_search($single_item, $a);
        //         if ($item_index !== false) {
        //             unset($a[$item_index]); // Unset the single item to avoid duplication in the loop
        //         }
        //     } else {
        //         $compatible = $compatible . ", " . ($single_item = fake()->randomElement($a));
        //         $item_index = array_search($single_item, $a);
        //         if ($item_index !== false) {
        //             unset($a[$item_index]); // Unset the single item to avoid duplication in the loop
        //         }
        //     }
        // }
        return [
            'name' => fake()->word(), 
            'type_of_tire' => fake()->randomElement(['Winterband', 'Zomerband']),
            'diameter' => fake()->randomFloat(2, 15, 20), // Should be integers, not strings
            'amount' => fake()->randomElement([2, 4, 6, 8]), 
            'chassy_compatibility' => fake()->randomElement(['Step', 'Fiets', 'Scooter', 'Personenauto', 'Vrachtwagen', 'Bus']),
            // 'chassy_compatibility' => $compatible,
            'assembly_time' => fake()->numberBetween(1, 10),
            'costs' => fake()->randomFloat(2, 1000, 10000),
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFav3gsgnE_FWl1IJB6GqHvePI_Quhkz_v_g&s'
        ];
    }
}