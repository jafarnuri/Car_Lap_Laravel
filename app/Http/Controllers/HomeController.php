<?php

namespace App\Http\Controllers;
use App\Http\Requests\CarRequest;
use App\Models\Car;
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
        $cars = Car::all();
        return view('frond.cars', compact('cars'));
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
    public function car_single($id)
    {
        $cars = Car::findOrFail($id);
        return view('frond.car-single', compact('cars'));
    }
}
