<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerType extends Model
{
    protected $table = "customer_types";

    protected $fillable=['name'];

    public function customers(){
        return $this->hasMany('App\Customer');
    }

}
