<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{

    public function welcome()
    {
        return view('welcome'); // resources/views/welcome.blade.php
    }

    public function about()
    {
        return view('page.about');
    }
    public function contact()
    {
        return view('page.contact');
    }
    public function shop()
    {
        return view('page.shop');
    }
    public function digitalProducts()
    {
        return view('page.digitalProducts');
    }
}
