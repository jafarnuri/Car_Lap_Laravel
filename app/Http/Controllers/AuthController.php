<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register_user(AuthRequest $request)
    {

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();


        // 3. Login səhifəsinə yönləndir
        return redirect()->route('login')->with('success', 'Qeydiyyat uğurla tamamlandı!');
    }

    public function login_user(LoginRequest $request)
    {
        // Email və password-u alırıq
        $credentials = $request->only('email', 'password');

        // Auth::attempt ilə istifadəçini yoxlayırıq
        if (Auth::attempt($credentials, $request->has('remember'))) {
            // Əgər giriş uğurludursa, dashboard-a yönləndiririk
            return redirect()->route('home')->with('success', 'Giriş uğurla tamamlandı!');
        }

        // Əgər səhvdirsə, geri qaytarırıq və səhv mesajını göstəririk
        return back()->withErrors([
            'email' => 'Email və ya şifrə yanlışdır.',
        ]);
    }
    public function logout()
    {
        // İstifadəçini çıxarır
        Auth::logout();

        // İstifadəçini login səhifəsinə yönləndirir
        return redirect()->route('home')->with('success', 'Çıxış uğurla tamamlandı!');
    }

}
