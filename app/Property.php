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
        'address',
        'notes',
        'city_id',
        'owner_id',
        'property_status_id',
        'property_type_id',
        'project_id'
    ];

    /*
    function owner(){
        return $this->hasOne('App\Customer','owner_id');
    }
*/
    function tags(){
        return $this->belongsToMany('App\Tag');
    }

    function images(){
        return $this->hasMany('App\Image');
    }

    function  propertyType(){
        return $this->belongsTo('App\PropertyType');
    }

    function  project(){
        return $this->belongsTo('App\Project');
    }

    function city(){
        return $this->belongsTo('App\City');
    }

    public static function properties($id){
        return Property::Where('project_id','=',$id)->get();
    }
}
