<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerType;
use Illuminate\Http\Request;
use App\Http\Requests;
use Laracasts\Flash\Flash;

class CustomersController extends Controller
{
    public function index(Request $request)
    {
        //Usuario autenticado
        $userId = \Auth::user()->id;

        $customerTypes = CustomerType::all();
        $customers = Customer::Search($request->name)->where('user_id',$userId)->paginate(5);//orderBy('id','desc');

        //dd($customers);

        $data = [
            'customerTypes' => $customerTypes,
            'customers' => $customers,
        ];
        return view('Customers.index',$data);//->with('data',$data);
    }


    public function create()
    {
        $customerTypes = CustomerType::pluck('name','id');
        $data = [
            'customerTypes' => $customerTypes,
        ];
        return view('Customers.create',$data);
    }

    public function store(Request $request)
    {
        $customer = new Customer($request->all());
        $customer->user_id = \Auth::user()->id;
        $customer->save();

        Flash::success('Contacto Creado.');

        return redirect()->route('Customers.index');
    }


    public function edit($id)
    {
        $customerTypes = CustomerType::pluck('name','id');
        $customer = Customer::find($id);

        $data = [
            'customerTypes' => $customerTypes,
            'customer' => $customer,
        ];

        return view('Customers.edit',$data);
        //dd($customer);
        //return view('Customers.edit')->with('Customers',$customer);
    }


    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        //$customer->name = $request->name;
        $customer->fill($request->all());
        $customer->save();

        flash('Contacto Actualizado.', 'info')->important();
        Flash::success('Contacto Creado.');

        return redirect()->route('Customers.index');

    }


}
