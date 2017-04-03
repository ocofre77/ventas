<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Property;
use App\PropertyType;
use App\PropertyStatus;
use App\State;

class PropertiesController extends Controller
{
    //

    public function index()
    {
        $properties = Property::all();//orderBy('id','desc');
        $propertyTypes = PropertyType::pluck('name','id');
        $data = [
            'propertyTypes' => $propertyTypes,
            'properties' => $properties,
        ];


        return view('Properties.index',$data);
    }

    public function create()
    {
        $propertyTypes = PropertyType::pluck('name','id');
        $propertyStates = PropertyStatus::pluck('name','id');
        $states = State::pluck('name','id');



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
            'map' => $map,
        ];


        return view('Properties.create',$data);
    }


}
