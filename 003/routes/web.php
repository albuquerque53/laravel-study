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

Route::group(['namespace' => 'Form'], function () 
{
    /**
     * Route::method('uri', 'Controller@methodController')->name('routename');
    */

    // GET::
    Route::get('users', 'TestController@listAll')->name('users.listAll'); // Get All
    Route::get('users/new', 'TestController@addUser')->name('users.add'); // User add Form
    Route::get('users/editor/{user}', 'TestController@editorUser')->name('users.editor'); // User edit form
    Route::get('users/{user}', 'TestController@listUser')->name('users.list'); // Get only one

    // POST
    Route::post('users/store', 'TestController@storeUser')->name('users.store'); // Catch form data and add

    // PUT
    Route::put('users/edit/{user}', 'TestController@editUser')->name('users.edit'); // Catch form data and update

    // DELETE
    Route::delete('users/destroy/{user}', 'TestController@destroyUser')->name('users.destroy'); // Delete User    
});
