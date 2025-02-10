<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ancestry;

class Language extends Model
{
    /** @use HasFactory<\Database\Factories\LanguageFactory> */
    use HasFactory;

    protected $guarded = [
    ];

    protected $casts = [
    ];

    // public function ancestry(){
    //     return $this->belongsToMany(Ancestry::class);
    // }
}
