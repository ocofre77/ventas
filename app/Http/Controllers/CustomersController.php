<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Tracking;
use App\CustomerType;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CustomerRequest;
use Laracasts\Flash\Flash;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        //dd($customer);

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
    public function destroy($id)
    {
        try {

            if ($id != null) {
                $customer = Customer::find($id);//orderBy('id','desc');

                $trackings = Tracking::where('contact_id', $id);

                if ($trackings->count() > 0)
                {
                    flash('No se puede borrar porque tiene inmuebles Asociados.', 'danger')->important();

                    $userId = \Auth::user()->id;

                    $customers = Customer::where('user_id',$userId)->paginate(5);

                    $data = [
                        'customers' => $customers,
                    ];
                    return view('Customers.index',$data);;
                }
                else
                {
                    $customer->delete();
                    flash('Se ha eliminado correctamente.', 'danger')->important();
                }
            }

            return redirect()->route('Customers.index');
        }
        catch(Exception $ex)
        {
            flash('No se puede borrar porque tiene inmuebles Asociados.', 'danger')->important();
        }
    }


}
