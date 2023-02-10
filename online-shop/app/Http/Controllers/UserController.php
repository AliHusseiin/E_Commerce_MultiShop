<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
     function index()
    {
        $users = User::all();
        
        return view('admin.users.users',compact('users'));
    }
}
