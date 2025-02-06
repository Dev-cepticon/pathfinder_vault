<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Archetype_Feature;
use App\Models\Feat;

class Archetype extends Model
{
    /** @use HasFactory<\Database\Factories\ArchetypeFactory> */
    use HasFactory;

    protected $guarded = [

    ];

    protected $casts = [
        'description' => 'json',
        'key_attributes' => 'json',
        'initail_proficiencies' => 'json',
    ];

    public function features()
    {
        return $this->hasMany(Archetype_Feature::class);
    }
    public function feats()
    {
        return $this->hasMany(Feat::class);
    }
}
