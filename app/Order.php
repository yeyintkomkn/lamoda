<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['name','phone','address','product_type','order_detail'];
}
