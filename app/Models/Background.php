<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    /** @use HasFactory<\Database\Factories\BackgroundFactory> */
    use HasFactory;

    protected $guarded = [

    ];

    protected $casts = [
        'ability_boosts' => 'json',
        'skill_proficiencies' => 'json',
        'feat_grants' => 'json', 
    ];
}
