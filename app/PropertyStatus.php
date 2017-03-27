<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyStatus extends Model
{
    protected $table="property_states";
    protected $fillable=['name'];


    function properties(){
        return $this->hasMany('App\Property');
    }

}
