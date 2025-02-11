<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /** @use HasFactory<\Database\Factories\CharacterFactory> */
    use HasFactory;

    protected $guarded = [

    ];

    protected $casts = [
        'languages' => 'json',
        'ability_scores' => 'json',
        'skill_proficiencies' => 'json',
        'feat_choices' => 'json',
        'features' => 'json',
        'equipment' => 'json',
    ];

    public function alignment(){
        return $this->hasOne(Alignment::class);
    }
}
