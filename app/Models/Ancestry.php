<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Heritage;

class Ancestry extends Model
{
    /** @use HasFactory<\Database\Factories\AncestryFactory> */
    use HasFactory;

    protected $guarded = [

    ];

    protected $casts = [
        'description' => 'json',
        'ability_boosts' => 'json',
        'traits' => 'json',
        'languages' => 'json',
    ];
    
    public function heritages()
    {
        return $this->hasMany(Heritage::class);
    }
}