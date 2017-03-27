<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";

    protected $fillable = ['path','name'];

    function property(){
        return $this->belongsTo('App\Property');
    }


}