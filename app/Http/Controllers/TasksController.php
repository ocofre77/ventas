<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Tracking;
use App\TaskType;
use App\Customer;
use App\Http\Requests;
use Mail;
use DateTime;

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
            $task->date = \Carbon\Carbon::parse($request->date)->format('Y-m-d');

            $task->save();
            $LastInsertId = $task->id;
            $this->sendMail($LastInsertId,$tracking->contact_id);
            return redirect()->route('Trackings.create',$tracking->contact_id);
    }

    public function doneTask($id){
        $task = Task::find($id);
        $task->done = true;
        $task->save();
    }


    public function sendMail($task_id,$customer_id){
      $customer = Customer::find($customer_id);
      $title = $customer->name;

      $task = Task::find($task_id);

      $tastType = TaskType::find($task->task_type_id);
      $userName = \Auth::user()->name;


      $content = "<p><strong>Tipo: </strong>". $tastType->name . "</p>";
      $content = $content . "<p><strong>Notas: </strong>" . $task->notes . "</p>";
      $content = $content . "<p><strong>Fecha: </strong>" . $task->date . "</p>";
      $content = $content . "<p><strong>Hora Desde: </strong>" . $task->hour_from . "</p>";
      $content = $content . "<p><strong>Hora Hasta: </strong>" . $task->hour_to . "</p>";
      $content = $content . "<p><strong>Vendedor: </strong>" . $userName . "</p>";

        Mail::send('Mail.send', ['title' => $title, 'content' => $content], function ($message)
        {
            //$message->from('orlando.cofre77@gmail.com', 'Administrador');
            $message->to('orlando.cofre77@gmail.com')->subject('Nueva Tarea!');
        });
    }

}
