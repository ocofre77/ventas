<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $table="properties";
    protected $fillable=[
        'name',
        'area',
        'useful_area',
        'bedrooms',
        'bathrooms',
        'value',
        'city_id',
        'owner_id',
        'property_status_id',
        'property_type_id'
    ];

    function tags(){
        return $this->belongsMany('App\Tag');
    }

    function images(){
        return $this->hasMany('App\Image');
    }


}
