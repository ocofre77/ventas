<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "cities";

    protected $fillable=['name'];

    public function state(){
        return $this->belongsTo('App\State');
    }

    public static function cities($id){
        return City::Where('state_id','=',$id)->get();
    }

}
