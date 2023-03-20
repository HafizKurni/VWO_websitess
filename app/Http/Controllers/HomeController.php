<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function vendor()
    {
        return view('home.vendor');
    }

    public function gallery()
    {
        return view('home.gallery');
    }

    public function shop()
    {
        return view('home.shop');
    }

    public function about()
    {
        return view('home.about');
    }
}
