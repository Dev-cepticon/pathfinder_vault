<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Purchased_Content extends Model
{
    //
    protected $table = 'user_purchased_content';
    protected $fillable = [
        'user_id',
    ];
    public $timestamps = false;
}
