<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ancestry>
 */
class AncestryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->word(),
            'hit_points' => fake()->numberBetween(1, 12),
            'size' => 'Medium',
            'speed' => fake()->numberBetween(1, 12),
            'ability_boosts' => fake()->word(),
            'ability_flaw' => fake()->word(),
            'vision' => fake()->word(),

        ];
    }
}