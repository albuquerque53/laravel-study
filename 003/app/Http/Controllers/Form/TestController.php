<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\User;

class TestController extends Controller
{
    // Get all
    public function listAll()
    {
        // $users = array with * users in the table
        $users = User::all();
  
        return view('listUsers', [
            "users" => $users
        ]);
    }
    // Get only one
    public function listUser(User $user)
    {
        return view('listUser', [
            "user" => $user
        ]);
    }

    // Form to add user
    public function addUser()
    {
        return view('addUser');
    }
    // Catch form data and add
    public function storeUser(Request $request)
    {
        $nUser = new User;

        $nUser->name = $request->name;
        $nUser->email = $request->email;
        $nUser->password = Hash::make($request->password);
        $nUser->save();
        // Return in updated * users page
        return redirect()->route('users.listAll');
    }

    // Form to edit User
    public function editorUser(User $user)
    {
        return view('editUser', [
            "user" => $user
        ]);
    }
    // Catch form data and Update
    public function editUser(User $user, Request $request)
    {
        $user->name = $request->name;

        if(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            $user->email = $request->email;
        }

        if(!empty($request->password)){
           $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.list', ['user' => $user->id]);
    }

    // Destroy
    public function destroyUser(User $user)
    {
        $user->delete();
        return redirect()->route('users.listAll');
    }

}
