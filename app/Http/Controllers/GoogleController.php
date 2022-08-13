<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleGoogleCallback(): \Illuminate\Http\RedirectResponse
    {
        try {

            $user = Socialite::driver('google')->user();

            $findUser = User::where('google_id', $user->id)
                ->orWhere('email', $user->email)
                ->first();

            if($findUser){

                Auth::login($findUser);

            }

            else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'email_verified_at' => now(),
                    'google_id'=> $user->id,
                    'password' => encrypt('CrownRestaurant')
                ]);

                Auth::login($newUser);

            }
            if (Auth::user()->role === '999') {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->intended('/');

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
