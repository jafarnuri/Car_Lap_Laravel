<?php
namespace App\Http\Middleware;

use Closure;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Sessiyadan dil təyin edirik, əgər yoxdursa varsayılanı istifadə edirik
        $locale = session('localization', config('app.locale'));
        app()->setLocale($locale);

        return $next($request);
    }
}
