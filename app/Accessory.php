<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $fillable=[
    	'name',
    	'detail',
        'level'
    ];
}
