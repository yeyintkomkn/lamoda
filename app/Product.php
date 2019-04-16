<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
    	'photo',
        'price',
        'data_id',
        'product_type'
    ];

    public function suit_type(){
    	return $this->belongsTo('App\Suit_type','data_id');
    }

    public function acc_type(){
    	return $this->belongsTo('App\Accessory','data_id');
    }

    public function waist_coat(){
    	return $this->belongsTo('App\WaistCoat','data_id');
    }
}
