<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\AboutSetting;
use Illuminate\Http\Request;
use Storage;

class SettingController extends Controller
{
    public function about_show()
    {
        $aboutSetting = AboutSetting::first();
        return view('admin.settings.about', compact('aboutSetting'));
    }

    public function about_update(AboutRequest $request)
    {
        // Request-in doğrulamasını keçirik
        $validated = $request->validated();

        // 'description' sahəsini JSON formatında hazırlayırıq
        $description = [
            'az' => $request->input('description_az'),
            'en' => $request->input('description_en')
        ];

        // Məlumatı bazada tapırıq
        $aboutSetting = AboutSetting::first();

        // Əgər şəkil varsa, yenisini yükləyirik
        if ($request->hasFile('image')) {
            // Əgər köhnə şəkil varsa və o, mövcuddursa, onu silirik
            if ($aboutSetting->image && Storage::disk('public')->exists($aboutSetting->image)) {
                Storage::disk('public')->delete($aboutSetting->image);
            }

            // Yeni şəkili yükləyirik və validated array-ə əlavə edirik
            $validated['image'] = $request->file('image')->store('uploads/about/images', 'public');
        }

        // 'description' sahəsini validated array-ə əlavə edirik
        $validated['description'] = $description;

        // Məlumatı yeniləyirik
        $aboutSetting->update($validated);

        return back()->with('success', 'Məlumat uğurla yeniləndi!');
    }


    public function services_show()
    {
        return view('admin.settings.service');
    }
    public function social_show()
    {
        return view('admin.settings.social_network');
    }

}
