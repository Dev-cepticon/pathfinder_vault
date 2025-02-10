<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::factory()->create([
            'name' => 'Goblin',
            'speakers' => 'Goblins, Hobgoblins, Bugbears',
        ]);
        Language::factory()->create([
            'name' => 'Common',
            'speakers' => 'Humans, dwarves, elves, halflings, and other common ancestries',
        ]);
    }
}
