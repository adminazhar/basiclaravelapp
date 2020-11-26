<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('/');
    }

    public function about(){
        return view('about');
    }

    public function services(){

        $services = \App\Models\Service::all();

        return view('services', compact('services'));
    }
}
