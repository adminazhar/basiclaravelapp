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

        $customer = \App\Models\Customer::create($this->validateData());

        return redirect('/customers/' . $customer->id);
    }

    public function show($customerId){
        //$customer = \App\Models\Customer::find($customerId);

        //with 404 error if not found record
        $customer = \App\Models\Customer::findorFail($customerId);

        return view('customer.show', compact('customer'));
    }

    public function edit(\App\Models\Customer $customer){
        return view('customer.edit', compact('customer'));
    }

    public function update(\App\Models\Customer $customer){

        $customer->update($this->validateData());

        return redirect('/customers');
    }

    public function destroy(\App\Models\Customer $customer){
        $customer->delete();

        return redirect('/customers');
    }

    protected function validateData(){
        return \request()->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email'
        ]);
    }
}
