<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "company";

    protected $fillable = [
        'name',
        'document_number',
        'image',
        'email',
        'phone',
        'cell_phone',
        'address',
        'city',
    ];
}
