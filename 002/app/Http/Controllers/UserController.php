<?php

/**
 * 
 *  User CONTROLLER
 * 
 *  Created with: php artisan make:Controller UserController  
 * 
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
        // User MODEL
//      $user = new User;
//      $user->name = "Gabriel Albuquerque";
//      $user->email = "gabrielalbuquerque-dev@hotmail.com";
//      $user->password = Hash::make("123");
        
        // Saving user data in DB
//      $user->save();

//      echo "<h1>User List:</h1>";

        // Loading User 1
        $user = User::where("id", "=", 1)->first();

        // Debug and die (to see complete info about this user)
//      dd($user);

        // Return listUser.blade.php for VIEW
        return view("listUser", [
            "user" => $user
        ]);
    }
}
