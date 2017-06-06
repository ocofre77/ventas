<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Customer;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
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
    public function index(Request $request)
    {
        //Usuario autenticado
        $userId = \Auth::user()->id;

        $customers = Customer::Search($request->name)->where('user_id',$userId)->paginate(5);//orderBy('id','desc');

        $data = [
            'customers' => $customers,
        ];
        return view('Customers.index',$data);//->with('data',$data);
    }
}