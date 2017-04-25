<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Http\Requests;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::all();//orderBy('id','desc');

        //Flash::info("Listado de Datos");

        return view('Projects.index')->with('projects',$projects);
    }



    public function destroy($id)
    {
        if( $id != null)
        {
            $project = Project::find($id);//orderBy('id','desc');
            $project->delete();
            //Flash::warnign('Se ha eliminado correctamente.');
            flash('Welcome to expertphp.in!');
        }

        return redirect()->route('Projects.index');

    }


    public function create()
    {
        return view('Projects.create');
    }

    public function store(Request $request)
    {

        $project = new Project($request->all());
            $project->save();
        flash('Estado de Propiedad Creado.', 'info')->important();

        return redirect()->route('Projects.index');
    }


    public function edit($id)
    {
        $project = Project::find($id);

        return view('Projects.edit')->with('project',$project);
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->name = $request->name;
        $project->save();

        //flash('Estado de Propiedad Actualizado.', 'info')->important();
        flash('Your message','info');

        return redirect()->route('Projects.index');

    }


}
