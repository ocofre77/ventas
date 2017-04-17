<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests;

class TasksController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
        $task = new Task($request->all());
        dd($task );
        //$task->save();

        flash('Tipo de Propiedad Creado.', 'info')->important();
        return redirect()->route('PropertyTypes.index');
    }
}
