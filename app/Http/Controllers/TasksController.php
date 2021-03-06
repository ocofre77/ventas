<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Tracking;
use App\TaskType;
use App\Http\Requests;

class TasksController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($tracking_id)
    {
        $taskTypes = TaskType::pluck('name','id');
        $tracking = Tracking::find($tracking_id);
        $data = [
            'taskTypes' => $taskTypes,
            'tracking_id' => $tracking_id,
            'contact_id' => $tracking->contact_id,
        ];
        return view('Tasks.create',$data);
    }


    public function store(Request $request)
    {
        //if( $request->ajax()){
            $task = new Task($request->all());
            $tracking_id = $request->tracking_id;
            $tracking = Tracking::find($tracking_id);
            $task->done = false;
            $task->date = date("Y-m-d",strtotime($request->date));

            $task->save();
            //flash('Tipo de Propiedad Creado.', 'info')->important();
            return redirect()->route('Trackings.create',$tracking->contact_id);
            //return response()->json($task);
        //}
    }

    public function doneTask($id){
        $task = Task::find($id);
        $task->done = true;
        $task->save();
    }


}
