<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $table = "trackings";

    protected $fillable = [

        'bedrooms_min',
        'bedrooms_max',
        'bathrooms_min',
        'bathrooms_max',
        'area_min',
        'area_max',
        'value_min',
        'value_max',
        'contact_id',
        'property_type_id',
        'business_status_id',
        'user_id',
    ];

    function  user(){
        return $this->belongsTo('App\User');
    }

    public function tasks(){
        return $this->hasMany('App\Task');
    }

    function tags(){
        return $this->belongsToMany('App\Tag','tracking_tag');
    }

    public function properties(){
        return $this->belongsToMany('App\Property','tracking_property');
    }


}
