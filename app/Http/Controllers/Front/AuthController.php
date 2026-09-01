<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    // Show register form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
