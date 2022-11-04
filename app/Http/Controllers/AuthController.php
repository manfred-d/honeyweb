<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function register(request $request){
        return view('auth.register');
    }
    function login(request $request)
    {
        return view('auth.login');
    }
}
