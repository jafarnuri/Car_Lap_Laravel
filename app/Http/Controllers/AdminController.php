<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
    public function about()
    {
        return view('admin.about_update');
    }
    public function car()
    {
        $cars = Car::all();
        return view('admin.car')->with('cars', $cars);
    }

    public function car_create()
    {
        return view('admin.car_create');
    }

    public function car_update($id)
    {
        $car = Car::findOrFail($id);
        return view('admin.car_update')->with('car', $car);
    }

    public function contact()
    {
        return view('admin.contact');
    }
    public function service()
    {
        return view('admin.service');
    }
}
