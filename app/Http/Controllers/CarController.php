<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use Storage;


class CarController extends Controller
{

    public function store(CarRequest $request)
    {

        $validate = $request->validated();


        if ($request->hasFile('image')) {
            $validate['image'] = $request->file('image')->store('uploads/cars/images', 'public');
        }

        Car::create($validate);

        return redirect()->route('admin.car')->with('success', 'Avtomobil uğurla əlavə edildi!');
    }

    public function update(CarRequest $request, $id)
    {
        $validate = $request->validated();

        $car = Car::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($car->image && Storage::disk('public')->exists($car->image)) {
                Storage::disk('public')->delete($car->image);
            }

            $validate['image'] = $request->file('image')->store(' uploads/cars/images', 'public');
        }

        $car->update($validate);

        return redirect()->route('admin.car')->with('success', 'Avtomobil uğurla yeniləndi!');
    }

    public function delete($id)
    {
        $car = Car::findOrFail($id);

        // Şəkil varsa, onu da silirik
        if ($car->image) {
            Storage::disk('public')->delete($car->image);
        }

        // Avtomobili silirik
        $car->delete();

        return redirect()->route('admin.car')->with('success', 'Avtomobil uğurla silindi!');
    }
}
