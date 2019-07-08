<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable=['ip','method','url','user_id','request'];


    protected $casts = [
        'request' => 'array'
    ];
}
