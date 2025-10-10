<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (is_null($credentials)) {
            return back()->withErrors([
                'email' => 'Something went wrong while logging you in.',
            ]);
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return 'Login succesfull!';
        }

        return back()->withErrors([
            'email' => 'A user with this email address was not found in our records.',
        ])->onlyInput('email');
    }

    public function register(Request $request)
    {
        $newUserData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'password_repeat' => ['required', 'same:password'],
            'gender' => ['required', 'in:male,female,different,unknown'],
        ]);

        dd($newUserData);
    }
}
