<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PropertyType;

class TrackingsController extends Controller
{
    //

    public function create()
    {
        $propertyTypes = PropertyType::pluck('name','id');

        $data = [
            'propertyTypes' => $propertyTypes,
        ];

        return view('Trackings.create',$data);
    }

    public function store(Request $request)
    {

        return redirect()->route('PropertyTypes.index');
    }

}
