<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\PropertyType;
use Laracasts\Flash\Flash;


class PropertyTypesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $propertyTypes = PropertyType::paginate(5);//orderBy('id','desc');
        return view('PropertyTypes.index')->with('propertyTypes',$propertyTypes);
    }


    public function create()
    {
        return view('PropertyTypes.create');
    }

    public function store(Request $request)
    {
        $PropertyType = new PropertyType($request->all());
        $PropertyType->save();

        flash('Tipo de Propiedad Creado.', 'info')->important();
        return redirect()->route('PropertyTypes.index');
    }


    public function edit($id)
    {
        $PropertyType = PropertyType::find($id);
        
        return view('PropertyTypes.edit')->with('PropertyType',$PropertyType);
    }


    public function update(Request $request, $id)
    {
        $PropertyType = PropertyType::find($id);
        $PropertyType->name = $request->name;
        $PropertyType->save();
        
        flash('Tipo de Propiedad Actualizado.', 'info')->important();
        return redirect()->route('PropertyTypes.index');
    }


    public function destroy($id)
    {
        if( $id != null)
        {
            $propertyType = PropertyType::find($id);//orderBy('id','desc');
            $propertyType->delete();
            flash('Se ha eliminado correctamente.', 'danger')->important();
        }    
        return redirect()->route('PropertyTypes.index');
    }

}
