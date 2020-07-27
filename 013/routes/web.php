<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'UserController@index')->name('users.index');
