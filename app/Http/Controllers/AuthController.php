<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authenticated(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }
        return back()->withErrors([
            'LoginError' => 'Email ou Password non correct'
        ]);
    }

    public function logout(){
        Auth::logout();

        return redirect('/login');
    }


}
