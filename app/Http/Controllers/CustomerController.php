<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        // list of all customers
        $customers = Customer::all();
        return view('customers.index', array('customers' => $customers));
    }

    public function create()
    {
        return view('customers.create');
        // create view form a new customer
    }

    public function store(Request $request)
    {
        // store customer endpoint
        $request->validate([
            'CustFirstName' => 'required',
            'CustLastName' => 'required',
            'CustAddress' => 'required',
            'CustCity' => 'required',
            'CustProv'=> 'required',
            'CustPostal' => 'required',
            'CustCountry' => 'nullable',
            'CustHomePhone' => 'nullable',
            'CustBusPhone' => 'required',
            'CustEmail' => 'required|email'
        ]);

        $customer = new Customer;
        $customer->CustFirstName = $request->get('CustFirstName');
        $customer->CustLastName = $request->get('CustLastName');
        $customer->CustAddress = $request->get('CustAddress');
        $customer->CustCity = $request->get('CustCity');
        $customer->CustProv = $request->get('CustProv');
        $customer->CustPostal = $request->get('CustPostal');
        $customer->CustCountry = $request->get('CustCountry');
        $customer->CustHomePhone = $request->get('CustHomePhone');
        $customer->CustBusPhone = $request->get('CustBusPhone');
        $customer->CustEmail = $request->get('CustEmail');
        $customer->AgentId = $request->get('AgentId');
        $customer->save();

        return redirect('/customers')->with('success', 'Customer has been updated.');
    }

    public function show($id)
    {
        // single customer
        $customer = Customer::find($id);
        return view('customers.show', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        // compact shortens the array like we have in index for the view.
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        // sends edited customer to db
        $request->validate([
            'CustFirstName' => 'required',
            'CustLastName' => 'required',
            'CustAddress' => 'required',
            'CustCity' => 'required',
            'CustProv'=> 'required',
            'CustPostal' => 'required',
            'CustCountry' => 'nullable',
            'CustHomePhone' => 'nullable',
            'CustBusPhone' => 'required',
            'CustEmail' => 'required|email'
        ]);

        $customer = Customer::find($id);
        $customer->CustFirstName = $request->get('CustFirstName');
        $customer->CustLastName = $request->get('CustLastName');
        $customer->CustAddress = $request->get('CustAddress');
        $customer->CustCity = $request->get('CustCity');
        $customer->CustProv = $request->get('CustProv');
        $customer->CustPostal = $request->get('CustPostal');
        $customer->CustCountry = $request->get('CustCountry');
        $customer->CustHomePhone = $request->get('CustHomePhone');
        $customer->CustBusPhone = $request->get('CustBusPhone');
        $customer->CustEmail = $request->get('CustEmail');
        $customer->save();

        return redirect('/customers')->with('success', 'Customer has been updated.');
    }
}
