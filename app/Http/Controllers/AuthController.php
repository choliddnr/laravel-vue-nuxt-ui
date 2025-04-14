<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Laravel\Socialite\Facades\Socialite;
use Str;

class AuthController extends Controller
{
    //
    public function loginShow()
    {
        return Inertia::render('auth/login');
    }

    public function registerShow()
    {
        return Inertia::render('auth/register');
    }

    public function googleRedirect(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(Request $request): RedirectResponse
    {
        $googleuser = Socialite::driver('google')->user();

        // dd($googleuser);

        $user = User::where('email', $googleuser->getEmail())->first();

        if (!$user) {
            $user = User::create([
                'username' => Str::slug($googleuser->getName()),
                'avatar' => $googleuser->getAvatar(),
                'google_id' => $googleuser->getId(),
                'name' => $googleuser->getName(),
                'email' => $googleuser->getEmail(),
                'remember_token' => $googleuser->token,
                'job' => rand(1, 3) == 1 ? 'web developer' : (rand(1, 3) == 2 ? 'web designer' : 'tech lead'),
            ]);
        }

        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->route('dashboard');
    }
}
