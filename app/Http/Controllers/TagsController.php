<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;

class TagsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tags = Tag::all();//orderBy('id','desc');

        //Flash::info("Listado de Datos");

        return view('Tags.index')->with('tags',$tags);
    }

    public function create()
    {
        return view('Tags.create');

    }
    public function store(Request $request)
    {

        $tag = new tag($request->all());
        $tag->save();
        flash('Caracteristica Creada.', 'info')->important();

        return redirect()->route('Tags.index');
    }
    public function edit($id)
    {
        $tag = tag::find($id);

        return view('Tags.edit')->with('tag',$tag);
    }
    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->save();

        //flash('Caracteristica Actualizado.', 'info')->important();
        flash('Your message','info');

        return redirect()->route('Tags.index');

    }
    public function destroy($id)
    {
        if( $id != null)
        {
            $tag = Tag::find($id);//orderBy('id','desc');
            $tag->delete();
            //Flash::warnign('Se ha eliminado correctamente.');
            flash('Welcome to expertphp.in!');
        }

        return redirect()->route('Tags.index');

    }
}
