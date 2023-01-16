<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(request $request){
        return view('auth.register');

    }
    // create new user
    public function store(Request $request){
        $validate = $request->validate([
            'fname' => ['required', 'min:3'],
            'lname' => ['required','min:3'],
            'uname' => ['required', 'min:3'],
            'email' => ['required','email', Rule::unique('users','email')],
            'password'=> 'required|confirmed|min:6',
        ]);
        // hash password
        $validate['password'] = bcrypt($validate['password']);
        // ddd($validate);
        // create user
        $user = User::create($validate);

        

        // loin redirect
        auth()->login($user);

        return redirect('/')->with('message','User register successfully');
        
    }

    function login(request $request)
    {
        return view('auth.login');
    }

    // authenticate login
    public function authenticate(Request $request){
        $validate = $request->validate([
            'email' =>['required','email'],
            'password'=>['required']
        ]);

        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            return redirect('/')->with('message','User logged in successful');
        }
        return back()->withErrors(['password' =>'invalid email or password credentials'])->onlyInput('password');
    }

    // loogout
    public function logout(request $request){

        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        
        return redirect('/')->with('message','User logged out successful');
    }
}