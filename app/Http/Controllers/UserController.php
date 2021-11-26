<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signup()
    {
        return view("signup");
    }
    public function usersign(Request $request)

    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|min:5 |max:12',
            'email' => 'required|unique:users',
            'subject' => 'required'
        ]);

        $user = new ModelsUser();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->subject = $request->subject;
        $res = $user->save();

        return back()->with('status', 'you signed up successfully :)');
        // return "you signed up successfully :)";
    }
}
