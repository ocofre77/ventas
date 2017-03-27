<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessStatus extends Model
{
    protected $table = "business_states";
    protected $fillable=[
        'name'
    ];

    public function trackings(){
        return $this->hasMany('App\Trackings');
    }
}

