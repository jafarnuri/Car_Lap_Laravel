<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Hər kəsin bu request-i istifadə etməsinə icazə verir
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description_az' => 'required|string',
            'description_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
