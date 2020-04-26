<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{
    public function dashboard()
    {
        if(Auth::check() === true){

            return view('admin.dashboard');

        } else {

            return redirect()->route('admin.login');

        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
           
            $login['success'] = true;
            echo json_encode($login);
            return;

        } else {

            $login['success'] = false;
            $login['message'] = 'Invalid user or password';
            echo json_encode($login);
            return;

        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.login');
    }

}
