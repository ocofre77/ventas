<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerType;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomersController extends Controller
{
    public function index()
    {
        $customerTypes = CustomerType::all();
        $customers = Customer::all();//::paginate(2);//orderBy('id','desc');

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
        $customer->save();

        flash('Contacto Creado.', 'info')->important();
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
        return redirect()->route('Customers.index');

    }




}
