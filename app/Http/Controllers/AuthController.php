<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authenticated(Request $request){
        $request -> validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');
        
        if (Auth::attemp($credentials)){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'loginError' => 'Email atau password salah'
        ]);
    }
}
