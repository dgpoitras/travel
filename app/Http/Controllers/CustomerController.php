<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index() 
    {
    	$customers = Customer::all();
    	return view('customers.index', array('customers' => $customers));
    }

    public function show($id)
    {
    	$customer = Customer::findOrFail($id);
    	return view('customers.show', array('customer' => $customer));
    }

    public function edit($id)
    {
    	$customer = Customer::findOrFail($id);
    	return view('customers.edit', array('customer' => $customer));
    }

    public function update(Request $request, $id)
    {
    		//
    }

}
