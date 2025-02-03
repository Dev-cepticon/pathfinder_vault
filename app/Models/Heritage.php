<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heritage extends Model
{
    /** @use HasFactory<\Database\Factories\HeritageFactory> */
    use HasFactory;

    protected $guarded = [

    ];
    protected $casts = [
        'addon' => 'json',
    ];

    public function ancestry()
    {
        return $this->belongsTo(Ancestry::class);
    }
}
