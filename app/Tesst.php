<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tesst extends Model
{
    protected $fillable=['ip','method','url','user_id','request'];

    protected $casts = [
        'request' => 'array'
    ];

}
