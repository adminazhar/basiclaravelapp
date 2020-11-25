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
        $services = [
            'Services 1',
             'Services 2',
             'Services 3'];

        return view('services', compact('services'));
    }
}
