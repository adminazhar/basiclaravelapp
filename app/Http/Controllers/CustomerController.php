<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = \App\Models\Customer::all();

        return view('customer.index', compact('customers'));
    }

    public function create(){
        return view('customer.create');
    }

    public function store(){
        $data = \request()->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email'
        ]);

        \App\Models\Customer::create($data);

        return redirect('/customers');
    }

    public function show($customerId){
        //$customer = \App\Models\Customer::find($customerId);

        //with 404 error if not found record
        $customer = \App\Models\Customer::findorFail($customerId);

        return view('customer.show', compact('customer'));
    }
}