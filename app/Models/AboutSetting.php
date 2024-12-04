<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSetting extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image'];
    public $timestamps = true;

    protected $casts = [
        'description' => 'array',
    ];
}
