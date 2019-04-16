<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suit extends Model
{
    protected $fillable=[
    	'photo',
        'price',
        'suit_type_id',
        'detail',
        'gender'
    ];

    public function suit_type(){
    	return $this->belongsTo('App\Suit_type');
    }
}
