<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', '\App\Http\Controllers\HomeController@index');
Route::get('/about', '\App\Http\Controllers\HomeController@about');


Route::get('/service', '\App\Http\Controllers\ServiceController@index');
Route::post('/service', '\App\Http\Controllers\ServiceController@store');

Route::get('/customers', '\App\Http\Controllers\CustomerController@index');


Route::get('/customers/create', '\App\Http\Controllers\CustomerController@create');
Route::post('/customers', '\App\Http\Controllers\CustomerController@store');
Route::get('/customers/{customerId}', '\App\Http\Controllers\CustomerController@show');
