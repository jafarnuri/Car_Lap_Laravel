<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\SettingController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;


Route::get('/localization/{locale}', [LocalizationController::class, 'changeLanguage'])
    ->name('localization');
Route::middleware(['localization'])->group(function () {
    Route::post('/login_user', [AuthController::class, 'login_user'])->name('login_user');
    Route::post('/register_user', [AuthController::class, 'register_user'])->name('register_user');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    //HomeController
    Route::get('/login', [HomeController::class, 'login'])->name('login');
    Route::get('/register', [HomeController::class, 'register'])->name('register');
    Route::get('/service', [HomeController::class, 'service'])->name('service');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('/send_message', [ContactController::class, 'store'])->name('send_message');

    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/cars', [HomeController::class, 'cars'])->name('cars');
    Route::get('/car-single/{id}', [HomeController::class, 'car_single'])->name('car_single');
    Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
    Route::get('/', [HomeController::class, 'home'])->name('home');

    Route::middleware(['auth'])->prefix('admin')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('admin.home');
            Route::get('/car', 'car')->name('admin.car');
            Route::get('/car-create', 'car_create')->name('admin.car_create');
            Route::get('/car-update/{id}', 'car_update')->name('admin.car-update');

        });

        Route::controller(CarController::class)->group(function () {
            Route::post('/car_create', 'store')->name('admin.store');
            Route::put('/admin/edit/{id}', 'update')->name('admin.edit');
            Route::get('/admin/car/delete/{id}', 'delete')->name('admin.car_delete');
        });
        Route::controller(SettingController::class)->group(function () {
            Route::get('/about_show', 'about_show')->name('admin.about_show');
            Route::get('/services_show', 'services_show')->name('admin.services_show');
            Route::get('/social_show', 'social_show')->name('admin.social_show');
            Route::put('/about_update', 'about_update')->name('admin.about_update');
        });


    });
});

