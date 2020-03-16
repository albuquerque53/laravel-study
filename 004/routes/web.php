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

Route::get('/', function () {
    return view('welcome');
});

// resource('main_route', 'Controller');

// Auto generate routes
Route::resource('usuarios', 'Form\\UserController')->names('user')->parameters([
    "usuarios" => "user" // Route with parameters will be usuarios/user
]);

/**
 * 
 * names('name') = Name of route (default = 'usuarios')
 * parameters(['route' => 'parameter']) Example: usuarios/ {usuario,user}  
 * 
 */