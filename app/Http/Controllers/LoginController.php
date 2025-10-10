<?php

namespace App\Http\Controllers;

use App\DTO\LoginDTO;
use App\Enums\Role;
use App\DTO\UserDTO;
use App\Models\User;
use App\Enums\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\AuthenticationService;

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

        if (app(AuthenticationService::class)->loginUser($request, new LoginDTO(email: $credentials['email'], password: $credentials['password'])));

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
            'gender' => ['required', 'in:male,female,rathernotsay'],
        ]);

        $newUser = app(AuthenticationService::class)->registerNewUser(new UserDTO(
            id: '',
            email: $newUserData['email'],
            password: $newUserData['password'],
            role: Role::Unregistered,
            gender: Gender::from($newUserData['gender'])
        ));

        if (!($newUser instanceof User)) {
            return back()->withErrors([
                'email' => 'Something went wrong while registering the new user',
            ])->onlyInput('email');
        }

        return redirect()->route('thanksforregistering');
    }
}
