<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function showLoginForm() {
        return view('auth.login');
    }

    // public function login(Request $request) {
    //     $credentials = $request->only('email', 'password');
    //     $remember = $request->filled('remember'); // checkbox check

    //     if (Auth::attempt($credentials, $remember)) {
    //         // ✅ Redirect to home page after login
    //         return redirect()->intended('/');
    //     }

    //     return back()->withErrors([
    //         'email' => 'Invalid credentials.',
    //     ]);
    // }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
