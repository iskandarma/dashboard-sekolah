<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth/login');
    }

    public function authenticating(Request $request) {
        $credentials = $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);
        

        if (Auth::attempt($credentials)) {
            return to_route('home');    
        } else {
            return back();
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login');
    }
}
