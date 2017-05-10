<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PropertyType;
use App\Project;
use App\Tag;
use App\Tracking;
use App\BusinessStatus;
use App\Customer;
use App\Property;
use App\TaskType;

class TrackingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($id)
    {
        $trackings = Tracking::where('contact_id',$id)->take(1)->get();

        $customer= Customer::find($id);
        $propertyTypes = PropertyType::pluck('name','id');
        $businessStatus = BusinessStatus::pluck('name','id');
        $taskTypes = TaskType::pluck('name','id');

        $projects= Project::pluck('name','id');
        $properties= Property::pluck('name','id');

        //Se deben Selecionar la  propiedades que no este vendidas
        $tags = Tag::pluck('name','id');

        if( $trackings->count() > 0  ){
            $my_tags = $trackings[0]->tags->lists('id')->ToArray();
            $tracking = $trackings[0];

            $suggested = $this->getSuggested($tracking);

            $data = [
                'propertyTypes' => $propertyTypes,
                'tags'=> $tags,
                'businessStatus'=> $businessStatus,
                'taskTypes' => $taskTypes,
                'customer'=> $customer,
                'properties'=> $properties,
                'propertiesSuggested' => $suggested,
                'tracking' => $tracking,
                'my_tags' => $my_tags,
                'projects' => $projects
            ];
            return view('Trackings.edit',$data);
        }

        $data = [
            'propertyTypes' => $propertyTypes,
            'tracking' => null,
            'tags'=> $tags,
            'businessStatus'=> $businessStatus,
            'taskTypes' => $taskTypes,
            'customer'=> $customer,
            'properties'=> $properties,
            'projects' => $projects,
        ];

        return view('Trackings.create',$data);
    }


    public function getSuggested($tracking){

        $propertiesSuggested= Property::Where('property_type_id','=',$tracking->property_type_id) ;

        if($tracking->bedrooms_min != null && $tracking->bedrooms_min > 0){
            $propertiesSuggested = $propertiesSuggested->Where('bedrooms','>=',$tracking->bedrooms_min );
        }
        if($tracking->bedrooms_max != null && $tracking->bedrooms_max > 0){
            $propertiesSuggested = $propertiesSuggested->Where('bedrooms','<=',$tracking->bedrooms_max );
        }

        if($tracking->bathrooms_min != null && $tracking->bathrooms_min > 0){
            $propertiesSuggested = $propertiesSuggested->Where('bathrooms','>=',$tracking->bathrooms_min );
        }
        if($tracking->bathrooms_max != null && $tracking->bathrooms_max > 0 ){
            $propertiesSuggested =  $propertiesSuggested->Where('bathrooms','<=',$tracking->bathrooms_max );
        }

        if($tracking->area_min != null && $tracking->area_min > 0 ){
            $propertiesSuggested =  $propertiesSuggested->Where('area','>=',$tracking->area_min );
        }

        if($tracking->area_max != null &&  $tracking->area_max > 0 ){
            $propertiesSuggested = $propertiesSuggested->Where('area','<=',$tracking->area_max );
        }

        if($tracking->value_min != null && $tracking->value_min > 0){
            $propertiesSuggested =  $propertiesSuggested->Where('value','>=',$tracking->value_min );
        }

        if($tracking->value_max != null && $tracking->value_max > 0 ){
            $propertiesSuggested = $propertiesSuggested->Where('value','<=',$tracking->value_max );
        }

        $result = $propertiesSuggested->get();


        $result->each(function($result){
            $result->images;
        });


        return ($propertiesSuggested->get());
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


    public function addProperty($tracking_id){

        $projects= Project::pluck('name','id');

        $data =[
            'projects'=> $projects,
            'tracking_id'=> $tracking_id,
        ];
        
        return view('Trackings.addProperty',$data );

    }

    public function storeProperty(Request $request){

        $tracking_id = $request->tracking_id;

        $tracking = Tracking::find($tracking_id);
        //$my_tags = $tracking->properties->lists('id')->ToArray();


        //$properties =

        $tracking->properties()->sync($request->tags);


        return redirect()->route('Trackings.create');
    }




}
