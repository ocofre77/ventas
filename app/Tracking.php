<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $table = "trackings";

    protected $fillable = [
        'name',
        'bedrooms_min',
        'bedrooms_max',
        'bathrooms_min',
        'bathrooms_max',
        'area_min',
        'area_max',
        'value_min',
        'value_max'];

    public function tasks(){
        return $this->hasMany('App\Task');
    }

    public function properties(){
        return $this->hasMany('App\Property');
    }


}
