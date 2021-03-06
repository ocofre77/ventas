<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Property;
use App\Project;
use App\PropertyType;
use App\PropertyStatus;
use App\State;
use App\Tag;
use App\Image;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use League\Flysystem\Exception;
use Laracasts\Flash\Flash;

class PropertiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getProperties(Request $request, $id){

        if( $request->ajax()){
            $properties = Property::properties($id);
            return response()->json($properties);
        }
    }

    public function index(Request $request)
    {
        //$properties = null;

        if( $request->project != "" and $request->propertyType == "" )
        {
            $properties = Property::Where('project_id','=',$request->project )
                ->paginate(6)
                ->appends('project_id',$request->project);
        }
        elseif( $request->project == "" and $request->propertyType != "" )
        {
            $properties = Property::Where('property_type_id','=',$request->propertyType )
                ->paginate(6)
                ->appends('property_type_id',$request->propertyType );
        }
        elseif( $request->project != "" and $request->propertyType != "" )
        {
            //dd($request->all());
            $properties = Property::Where('property_type_id',$request->propertyType )
                ->Where('project_id',$request->project )
                ->paginate(6)
                ->appends('project_id',$request->project)
                ->appends('property_type_id',$request->propertyType );
        }
        elseif( $request->project == "" and $request->propertyType == "" )
        {
            $properties = Property::paginate(6);//orderBy('id','desc');//orderBy('id','desc');
        }


        $properties->each(function($properties){
            $properties->propertyType;
        });
        $propertyTypes = PropertyType::pluck('name','id');
        $projects = Project::pluck('name','id');
        $data = [
            'propertyTypes' => $propertyTypes,
            'properties' => $properties,
            'projects' => $projects,
        ];
        return view('Properties.index',$data);
    }


    public function create()
    {
        $propertyTypes = PropertyType::pluck('name','id');
        $propertyStates = PropertyStatus::pluck('name','id');
        $states = State::pluck('name','id');
        $tags = Tag::pluck('name','id');
        $projects = Project::pluck('name','id');

        $config = array();
        $config['center'] = 'auto';
        $config['map_width'] = 500;
        $config['map_height'] = 200;
        $config['zoom'] = 15;
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
            });
        }
        centreGot = true;';

        \Gmaps::initialize($config);

        // Colocar el marcador
        // Una vez se conozca la posición del usuario
        $marker = array();
        \Gmaps::add_marker($marker);

        $map = \Gmaps::create_map();

        //Devolver vista con datos del mapa
        //return view('gmaps', compact('map'));

        $data = [
            'propertyTypes' => $propertyTypes,
            'propertyStates' => $propertyStates,
            'states' => $states,
            'tags' => $tags,
            'map' => $map,
            'projects' => $projects,
        ];

        return view('Properties.create',$data);
    }


    public function store(Request $request){

        $property = new Property($request->all());
        $property->owner_id = null;

        DB::beginTransaction();
        try{
            $property ->save();

            //Manipulación de Imágenes
            if($request->file('image')){
                $files = $request->file('images');
                foreach($files as $file){
                    $rules = array('file','required');
                    $validator = Validator::make(array('file'=>$file),$rules);
                    if($validator){
                        $name = 'property'.time().'.'.$file->getClientOriginalExtension();
                        $path = public_path().'/images/galery/';
                        $file->move($path,$name);

                        $image = new Image();
                        $image->name = $name;
                        $image->property()->associate($property);
                        $image->save();
                    }
                }
            }
            $property->tags()->sync($request->tags);
            flash('Inmueble Creado.', 'info')->important();
        }
        catch(Exception $ex)
        {
            DB::rollBack();
            flash('Inmueble Creado.', 'info')->important();
        }
        DB::commit();
        return redirect()->route('Properties.index');
    }


    public function edit($id)
    {
        $propertyTypes = PropertyType::pluck('name','id');
        $propertyStates = PropertyStatus::pluck('name','id');
        $states = State::pluck('name','id');
        $tags = Tag::pluck('name','id');


        $property = Property::find($id);
        $my_tags = $property->tags->lists('id')->ToArray();

        $data = [
            'propertyTypes' => $propertyTypes,
            'propertyStates' => $propertyStates,
            'states' => $states,
            'tags' => $tags,
            'property' => $property,
            'my_tags'=>$my_tags,

        ];

        return view('Properties.edit',$data);
        //dd($customer);
        //return view('Customers.edit')->with('Customers',$customer);
    }

    public function update(Request $request, $id)
    {
        $property = Property::find($id);
        $property->fill($request->all());
        $property->address = $request->address;
        $property->owner_id = null;

        if($request->file('image')){


        $files = $request->file('images');

        foreach($files as $file){
            $rules = array('file','required');
            $validator = Validator::make(array('file'=>$file),$rules);
            dd($validator);
            if($validator){
                $name = 'property'.time().'.'.$file->getClientOriginalExtension();
                $path = public_path().'/images/galery/';
                $file->move($path,$name);
                $image = new Image();
                $image->name = $name;
                $image->property()->associate($property);
                $image->save();
            }
        }
      }
        $property->save();
        $property->tags()->sync($request->tags);
        flash('Inmueble Actualizado.', 'info')->important();
        return redirect()->route('Properties.index');
    }


    public function destroy($id)
    {

        try{
            if( $id != null)
            {
                $property = Property::find($id);//orderBy('id','desc');
                $property->delete();
                flash('Se ha eliminado correctamente.', 'danger')->important();
                return redirect()->route('Properties.index');
            }
        }
        catch(Exception $ex)
        {
            flash('Inmueble Creado.', 'info')->important();
            return redirect()->route('Properties.index');
        }
    }

    public function show($id){
        $property = Property::find($id);
        $property->propertyType;
        $property->images;
        $property->city;

        $data = [
            'property' => $property
        ];
        return view('Properties.show',$data);
    }


}
