<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerType extends Model
{
    protected $table = "customer";

    protected $fillable=['name'];


    public function customers(){
        return $this->hasMany('App\Customer');
    }


}
