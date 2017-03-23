<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardsController extends Controller
{
    public function admin()
    {
        return view('Dashboards.DashboardAdmin');
    }

    public function sales()
    {
        return view('Dashboards.DashboardSales');
    }

    public function properties()
    {
        return view('Dashboards.DashboardProperty');
    }

}
