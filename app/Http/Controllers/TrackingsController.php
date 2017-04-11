<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PropertyType;
use App\Tag;
use App\Tracking;
use App\BusinessStatus;

class TrackingsController extends Controller
{
    //

    public function create($id)
    {

        $propertyTypes = PropertyType::pluck('name','id');
        $businessStatus = BusinessStatus::pluck('name','id');

        $tags = Tag::pluck('name','id');

        $data = [
            'propertyTypes' => $propertyTypes,
            'tags'=> $tags,
            'businessStatus'=> $businessStatus,
            'id'=> $id,
        ];

        return view('Trackings.create',$data);
    }

    public function store(Request $request)
    {

            $tracking = new Tracking($request->all());

                $tracking->save();
        //dd($tracking->tags());
        $tracking->tags()->sync($request->tags);

        return redirect()->route('Customers.index');

    }

}
