<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public $timestamps = false;
    public $incrementing = false;


    protected $fillable = [
        'name', 'id',
    ];
}
