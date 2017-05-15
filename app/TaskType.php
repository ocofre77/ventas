<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskType extends Model
{
    protected $table="task_types";

    protected $fillable = ['name','icon'];


    public function user()
    {
        return $this->belongsTo('App\Task');
    }


}
