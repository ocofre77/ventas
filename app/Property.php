<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $table="properties";
    protected $fillable=[
        'name'
    ];

    function tags(){
        return $this->belongsMany('App\Tag');
    }

    function images(){
        return $this->hasMany('App\Image');
    }


}
