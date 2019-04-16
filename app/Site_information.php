<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site_information extends Model
{
    protected $fillable=['id','name','email','phone1','phone2','address1','address2','facebook_url','youtube_url','about_us'];
}
