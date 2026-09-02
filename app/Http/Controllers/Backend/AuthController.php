<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('backend.auth_backend.login');
    }
}
