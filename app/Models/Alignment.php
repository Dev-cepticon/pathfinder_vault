<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alignment extends Model
{
    /** @use HasFactory<\Database\Factories\AlignmentFactory> */
    use HasFactory;

    protected $guarded = [

    ];

    public function characters(){
        return $this->belongsToMany(Character::class);
    }
}
