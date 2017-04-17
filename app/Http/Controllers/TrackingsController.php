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
use App\TaskType;

class TrackingsController extends Controller
{
    public function create($id)
    {
        $trackings = Tracking::where('contact_id',$id)->take(1)->get();
        $customer= Customer::find($id);
        $propertyTypes = PropertyType::pluck('name','id');
        $businessStatus = BusinessStatus::pluck('name','id');
        $taskTypes = TaskType::pluck('name','id');

        $properties= Property::pluck('name','id');
        //Se deben Selecionar la  propiedades que no este vendidas
        $tags = Tag::pluck('name','id');

        if( $trackings->count() > 0  ){
            $my_tags = $trackings[0]->tags->lists('id')->ToArray();
            $data = [
                'propertyTypes' => $propertyTypes,
                'tags'=> $tags,
                'businessStatus'=> $businessStatus,
                'taskTypes' => $taskTypes,
                'customer'=> $customer,
                'properties'=> $properties,
                'tracking' => $trackings[0],
                'my_tags' => $my_tags,
            ];
            return view('Trackings.edit',$data);
        }

        $data = [
            'propertyTypes' => $propertyTypes,
            'tags'=> $tags,
            'businessStatus'=> $businessStatus,
            'taskTypes' => $taskTypes,
            'customer'=> $customer,
            'properties'=> $properties,
        ];

        return view('Trackings.create',$data);
    }

    public function edit($id)
    {
        $trackings = Tracking::where('contact_id',$id)->take(1)->get();
        $customer= Customer::find($id);
        $propertyTypes = PropertyType::pluck('name','id');
        $businessStatus = BusinessStatus::pluck('name','id');
        $taskTypes = TaskType::pluck('name','id');

        $properties= Property::pluck('name','id');
        //Se deben Selecionar la  propiedades que no este vendidas
        $tags = Tag::pluck('name','id');

        if( $trackings->count() > 0  ){
            $my_tags = $trackings[0]->tags->lists('id')->ToArray();
            $data = [
                'propertyTypes' => $propertyTypes,
                'tags'=> $tags,
                'businessStatus'=> $businessStatus,
                'taskTypes' => $taskTypes,
                'customer'=> $customer,
                'properties'=> $properties,
                'tracking' => $trackings[0],
                'my_tags' => $my_tags,
            ];
            return view('Trackings.edit',$data);
        }


    }

    public function store(Request $request)
    {

        $tracking = new Tracking($request->all());
        $tracking->user_id = \Auth::user()->id;

        //dd($tracking->user_id);

                $tracking->save();
        //dd($tracking->tags());
        $tracking->tags()->sync($request->tags);

        return redirect()->route('Customers.index');

    }

    public function update(Request $request, $id)
    {
        $tracking = Tracking::find($id);
        $tracking->fill($request->all());
        $tracking->save();
        $tracking->tags()->sync($request->tags);



        flash('Inmueble Actualizado.', 'info')->important();

        return redirect()->route('Customers.index');

    }

}
