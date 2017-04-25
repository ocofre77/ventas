<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "tasks";

    protected $fillable = ['date','hour_from','hour_to',
        'notes','done','property_id',
        'tracking_id','task_type_id' ];


    public function tracking(){
        return $this->belongsTo('App\Tracking');
    }

    public function taskType()
    {
        return $this->belongsTo('App\TaskType');
    }

}
