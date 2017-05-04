<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function marketing()
    {
        return view('Customers.marketing');
    }

}
