<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";

    protected $fillable = [
        'name',
        'email',
        'phone',
        'cell_phone',
        'address',
        'city',
        'customer_type_id',
    ];


    public function customerType()
    {
        return $this->belongsTo('App\CustomerType');
    }


}

