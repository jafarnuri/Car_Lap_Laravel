<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'model',
        'image',
        'description',
        'price_per_day',
        'year',
        'status',
        'mileage',
        'transmission',
        'seats',
        'luggage',
        'fuel',
    ];
}
