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
        'user_id',

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function customerType()
    {
        return $this->belongsTo('App\CustomerType');
    }

    public function  scopeSearch($query,$name)
    {
        return $query->Where('name','LIKE',"%$name%");
    }

}

