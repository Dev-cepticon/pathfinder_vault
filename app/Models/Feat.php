<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feat extends Model
{
    /** @use HasFactory<\Database\Factories\FeatFactory> */
    use HasFactory;

    protected $guarded = [

    ];


    protected $casts = [
        'tags' => 'json',
    ];

    public function ancestry()
    {
        return $this->belongsTo(Ancestry::class);
    }
}
