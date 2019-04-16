<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suit_type extends Model
{
    protected $fillable=[
    	'name',
    	'detail'
    ];

    public function suits(){
    	return $this->hasMany("App\Suit");
    }
}
