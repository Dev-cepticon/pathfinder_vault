<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'name' => 'Unknown Adventurer',
            'ability_scores'=> [
                "str" => 10,
                "dex" => 10,
                "con" => 10,
                "int" => 10,
                "wis" => 10,
                "cha" => 10,
            ],
        ];
    }
}
