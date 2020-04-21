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

Route::view('form', 'upload.form');
Route::post('upload', 'UploadController@upload')->name('upload');

// Product
Route::view('register', 'products.form')->name('product.register');
Route::post('save', 'ProductController@store')->name('product.store');