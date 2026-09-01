<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
     public function showLoginForm()
    {
        return view('backend.auth_backend.login');
    }

     public function login(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8000/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            $data = $response->json();

            // JWT token save in session
            session(['token' => $data['access_token']]);

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
        ]);
    }

    public function logout(Request $request)
    {
        $token = session('token');

        Http::withToken($token)->post('http://127.0.0.1:8000/api/logout');

        session()->forget('token');

        return redirect('/');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8000/api/register', [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            return redirect()->route('login')->with('success', 'Registration successful, please login.');
        }

        return back()->withErrors([
            'email' => 'Registration failed.',
        ]);
    }
}
