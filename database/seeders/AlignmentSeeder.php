<?php

namespace Database\Seeders;

use App\Models\Alignment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alignment::factory()->create([
            'name' => 'Lawful Good',
            'abbreviation' => 'LG',
        ]);
        Alignment::factory()->create([
            'name' => 'Neutral Good',
            'abbreviation' => 'NG',
        ]);
        Alignment::factory()->create([
            'name' => 'Chaotic Good',
            'abbreviation' => 'CG',
        ]);
    }
}
