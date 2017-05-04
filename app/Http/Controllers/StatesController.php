<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class StatesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCities(Request $request, $id){

        if( $request->ajax()){
            $cities = City::cities($id);
            return response()->json($cities);
        }
    }
}
