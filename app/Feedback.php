<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable=[
    	'name',
//    	'position',
    	'photo',
    	'description',
        'rating',
    	'date'
    ];
}
