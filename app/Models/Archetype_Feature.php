<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Archetype;

class Archetype_Feature extends Model
{
    /** @use HasFactory<\Database\Factories\ArchetypeFeatureFactory> */
    use HasFactory;

    protected $table = 'archetype_features';
    protected $guarded = [

    ];

    protected $casts = [
        'effect' => 'json',
    ];

    public function features()
    {
        return $this->belongsTo(Archetype::class);
    }
}
