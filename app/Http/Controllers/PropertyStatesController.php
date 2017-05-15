<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PropertyStatus;
use Laracasts\Flash\Flash;


class PropertyStatesController extends Controller
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
        $propertyStates = PropertyStatus::all();//orderBy('id','desc');
        
        //Flash::info("Listado de Datos");

        return view('PropertyStates.index')->with('propertyStates',$propertyStates);
    }



    public function destroy($id)
    {
        if( $id != null)
        {
            $propertyStatus = PropertyStatus::find($id);//orderBy('id','desc');
            $propertyStatus->delete();
            flash('Se ha eliminado correctamente.', 'danger')->important();
        }    

        $propertyStates = PropertyStatus::all();//orderBy('id','desc');
        return view('PropertyStates.index')->with('propertyStates',$propertyStates);
    }


    public function create()
    {
        return view('PropertyStates.create');
    }

    public function store(Request $request)
    {

        $propertyStatus = new PropertyStatus($request->all());
        $propertyStatus->save();
        $propertyStates = PropertyStatus::all();//orderBy('id','desc');
        flash('Estado de Propiedad Creado.', 'info')->important();

        //return redirect()->route('PropertyStates.index');
        $propertyStates = PropertyStatus::all();//orderBy('id','desc');
        //flash('Estado de Propiedad Actualizado.', 'success')->important();
        return view('PropertyStates.index')->with('propertyStates',$propertyStates);

    }


    public function edit($id)
    {
        $propertyStatus = PropertyStatus::find($id);

        return view('PropertyStates.edit')->with('PropertyStatus',$propertyStatus);
    }

    public function update(Request $request, $id)
    {
        $propertyStatus = PropertyStatus::find($id);
        $propertyStatus->name = $request->name;
        $propertyStatus->save();
        $propertyStates = PropertyStatus::all();//orderBy('id','desc');
        flash('Estado de Propiedad Actualizado.', 'success')->important();
        return view('PropertyStates.index')->with('propertyStates',$propertyStates);
    }


}
