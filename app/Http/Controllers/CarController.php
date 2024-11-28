<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use Storage;


class CarController extends Controller
{

    public function store(CarRequest $request)
    {
        // Validasiya edilmiş məlumatları alırıq
        $validate = $request->validated();

        // Əgər şəkil varsa, onu yükləyirik
        if ($request->hasFile('image')) {
            $validate['image'] = Storage::putFile('uploads/cars/images', $request->file('image'));
        }

        // Yeni avtomobili bazaya əlavə edirik
        Car::create($validate);

        return redirect()->route('admin.car')->with('success', 'Avtomobil uğurla əlavə edildi!');
    }
}
