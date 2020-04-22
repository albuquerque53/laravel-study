<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

            return redirect()->route('admin');

        } else {

            return redirect()->back()->withErrors(['Invalid user or password']);

        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.login');
    }
}
