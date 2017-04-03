<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;

class StatesController extends Controller
{
    public function getCities(Request $request, $id){

        if( $request->ajax()){
            $cities = City::cities($id);
            return response()->json($cities);
        }
    }
}
