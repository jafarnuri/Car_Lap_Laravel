<?php
namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Session-da saxlanılan dili yükləyirik, əgər yoxdursa, 'az' olaraq qalıb
        $locale = session('locale', 'az');
        App::setLocale($locale);
    }

    public function register()
    {
        //
    }
}

