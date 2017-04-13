<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PropertyType;
use App\Tag;
use App\Tracking;
use App\BusinessStatus;
use App\Customer;
use App\Property;

class TrackingsController extends Controller
{
    //

    public function create($id)
    {

        $tracking = Tracking::where('contact_id',$id);
        if( $tracking->count() > 0  ){
            dd("Existe el Contacto");
        }

        $customer= Customer::find($id);
        $propertyTypes = PropertyType::pluck('name','id');
        $businessStatus = BusinessStatus::pluck('name','id');
        $properties= Property::pluck('name','id');
        //Se deben Selecionar la  propiedades que no este vendidas
        $tags = Tag::pluck('name','id');

        $data = [
            'propertyTypes' => $propertyTypes,
            'tags'=> $tags,
            'businessStatus'=> $businessStatus,
            'customer'=> $customer,
            'properties'=> $properties,
        ];

        return view('Trackings.create',$data);
    }

    public function store(Request $request)
    {

            $tracking = new Tracking($request->all());
        $tracking->user_id = \Auth::user()->id;

                $tracking->save();
        //dd($tracking->tags());
        $tracking->tags()->sync($request->tags);

        return redirect()->route('Customers.index');

    }

}
