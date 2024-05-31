<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class AuthController extends Controller{
    public function loginPage(){
        return view('auth.login');
    }

    public function login(Request $request){
        $user =Users::where('email', $request->email)->first();

        if ($user == null) {
            return redirect()->back()->with('error','User tidak ditemukan!');
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error','Password salah!');
        }

        $request->session()->regenerate();
        $request->session()->put('isLogged','true');
        $request->session()->put('userld', $user->id);
        $request->session()->put('role', 'user');

        return redirect()->route('users.index') ;

    }

    public function logout(Request $request){
        
    }
}
