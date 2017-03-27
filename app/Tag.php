<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";

    protected $fillable = ['name'];


    public function properties(){
        return $this->belongsTo('App\Property')->withTimestamps();
    }

    public function trackings(){
        return $this->belongsTo('App\Tracking')->withTimestamps();
    }

}
