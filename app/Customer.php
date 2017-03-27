<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table ="customers";

    protected $fillable=[
        'name',
        'email',
        'phone',
        'cell_phone',
        'address',
        'city',
    ];



    public function customerType(){
        return $this->hasOne('App\CustomerType');
    }

}

