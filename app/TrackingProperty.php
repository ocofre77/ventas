<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackingProperty extends Model
{
    protected $table = "tracking_property";
    protected $fillable = [
        'tracking_id',
        'property_id',
        'winner',
    ];

    //
}
