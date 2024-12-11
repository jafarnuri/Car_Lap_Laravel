<?php

namespace App\Http\Controllers;



class LocalizationController extends Controller
{
    /**
     * Change the application language.
     *
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLanguage($locale)
    {
        // Mövcud dillər siyahısını yoxla
        if (in_array($locale, config('localization.locales'))) {
            session(['localization' => $locale]); // Dili sessiyada saxla
        }

        return redirect()->back(); // Əvvəlki səhifəyə geri qayıt
    }
}