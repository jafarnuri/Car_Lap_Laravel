<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frond.home');
    }
    public function about()
    {
        return view('frond.about');
    }
    public function service()
    {
        return view('frond.services');
    }
    public function pricing()
    {
        return view('frond.pricing');
    }
    public function cars()
    {
        return view('frond.cars');
    }
    public function blog()
    {
        return view('frond.blog');
    }
    public function contact()
    {
        return view('frond.contact');
    }

    public function login()
    {
        return view('Auth.login');
    }

    public function register()
    {
        return view('Auth.register');
    }
}
