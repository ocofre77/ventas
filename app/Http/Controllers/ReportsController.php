<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Query\Builder;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Engines\BaseEngine;
use Yajra\Datatables\Services\DataTable;


class ReportsController extends Controller
{
    //
/*    public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function getSalesIndex(){
        return view('Reports.sales');
    }

    public function getTasksIndex(){
        return view('Reports.tasks');
    }


    public function salesData(){
        $sales = DB::table('customers')
            ->join('users', 'customers.user_id', '=', 'users.id')
            ->join('trackings','trackings.contact_id','=','customers.id')
            ->join('tracking_property','tracking_property.tracking_id','=','trackings.id')
            ->join('properties','properties.id','=','tracking_property.property_id')
            ->join('property_types','property_types.id','=','properties.property_type_id')
            ->join('projects','projects.id','=','properties.project_id')
            ->select('trackings.id',
                'users.name as user_name',
                'customers.name as customer_name',
                'projects.name as project_name',
                'property_types.name as property_type',
                'properties.name',
                'properties.value')
            ->where('trackings.business_status_id', '=', 5);

        return Datatables::of($sales)->make(true);
    }


    public function tasksData(){
        $sales = DB::table('customers')
            ->join('users', 'customers.user_id', '=', 'users.id')
            ->join('trackings','trackings.contact_id','=','customers.id')
            ->join('tasks','tasks.tracking_id','=','trackings.id')
            ->join('task_types','task_types.id','=','tasks.task_type_id')
            ->select('tasks.id',
                'users.name as user_name',
                'customers.name as customer_name',
                'task_types.name',
                'tasks.date',
                'tasks.hour_from',
                'tasks.hour_to',
                'tasks.notes')
            ->where('trackings.business_status_id', '<>', 5);

        return Datatables::of($sales)->make(true);
    }




}
