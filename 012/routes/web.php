<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'AuthController@dashboard');

// Dashboard
Route::get('/admin', 'AuthController@dashboard')->name('admin');

// Authentication
Route::view('/login', 'admin.login')->name('admin.login');
Route::post('/login', 'AuthController@login')->name('admin.login.do');

// Logout
Route::get('/logout', 'AuthController@logout')->name('admin.logout');

