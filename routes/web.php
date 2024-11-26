<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



//AuthController

Route::post('/login_user', [AuthController::class, 'login_user'])->name('login_user');
Route::post('/register_user', [AuthController::class, 'register_user'])->name('register_user');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//HomeController
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/cars', [HomeController::class, 'cars'])->name('cars');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/', [HomeController::class, 'home'])->name('home');