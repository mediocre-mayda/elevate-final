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

}
