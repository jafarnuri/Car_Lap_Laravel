<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    public function authorize()
    {
        // Bütün istifadəçilər üçün bu request-i təsdiq edirik
        return true;
    }

    public function rules()
    {
        $rules = [
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'price_per_day' => 'required|numeric|min:0',  // Numeric olmalı
            'year' => 'required|numeric|digits:4',
            'mileage' => 'required|numeric|min:0',  // Numeric olmalı
            'transmission' => 'required|string|max:50',
            'seats' => 'required|numeric|min:1',
            'luggage' => 'required|integer|min:0',  // Tam ədəd olmalı
            'fuel' => 'required|string|max:50',
            'description' => 'required|string|max:1000',
            'status' => 'required|in:active,inactive,pending',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // şəkil formatı
        ];

        // `update` əməliyyatı üçün "required" olmayan validasiya
        if ($this->isMethod('put')) {
            // "required" olmayanları `sometimes` olaraq təyin edirik
            $rules['make'] = 'sometimes|string|max:255';
            $rules['model'] = 'sometimes|string|max:255';
            $rules['price_per_day'] = 'sometimes|numeric|min:0';
            $rules['year'] = 'sometimes|numeric|digits:4';
            $rules['mileage'] = 'sometimes|numeric|min:0';
            $rules['transmission'] = 'sometimes|string|max:50';
            $rules['seats'] = 'sometimes|numeric|min:1';
            $rules['luggage'] = 'sometimes|integer|min:0';
            $rules['fuel'] = 'sometimes|string|max:50';
            $rules['description'] = 'sometimes|string|max:1000';
            $rules['status'] = 'sometimes|in:active,inactive,pending';
            $rules['image'] = 'sometimes|image|mimes:jpg,jpeg,png,gif|max:2048';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'make.required' => 'Marka sahəsi vacibdir.',
            'model.required' => 'Model sahəsi vacibdir.',
            'price_per_day.required' => 'Gündəlik qiymət sahəsi vacibdir.',
            'price_per_day.numeric' => 'Gündəlik qiymət sahəsi yalnız rəqəm olmalıdır.',
            'year.required' => 'İl sahəsi vacibdir.',
            'mileage.required' => 'Yürüş sahəsi vacibdir.',
            'mileage.numeric' => 'Yürüş sahəsi yalnız rəqəm olmalıdır.',
            'transmission.required' => 'Yürüş növü sahəsi vacibdir.',
            'seats.required' => 'Oturacaq sayı sahəsi vacibdir.',
            'luggage.required' => 'Yük tutumu sahəsi vacibdir.',
            'luggage.integer' => 'Yük tutumu sahəsi yalnız tam ədəd olmalıdır.',
            'fuel.required' => 'Yanacaq növü sahəsi vacibdir.',
            'description.required' => 'Təsvir sahəsi vacibdir.',
            'status.required' => 'Status sahəsi vacibdir.',
            'image.required' => 'Şəkil sahəsi vacibdir.',
        ];
    }
}
