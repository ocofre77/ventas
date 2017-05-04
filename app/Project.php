<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table="projects";
    protected $fillable=['name'];

    function properties(){
        return $this->hasMany('App\Property');
    }


}
