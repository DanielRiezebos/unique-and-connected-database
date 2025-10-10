<?php

namespace App\Services;

use App\Models\User;
use App\DTO\UserDTO;
use App\DTO\LoginDTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationService
{
    public function loginUser(Request $request, LoginDTO $credentials)
    {
        if (Auth::attempt([$credentials->getEmail(), $credentials->getPassword()])) {
            return $request->session()->regenerate();
        }
    }

    public function registerNewUser(UserDTO $newUser) : User|bool
    {
        try {
            return User::create([
                'email' => $newUser->getEmail(),
                'password' => $newUser->getPassword(),
                'role' => $newUser->getRole(),
                'gender' => $newUser->getGender()
            ]);
        } catch (\Throwable $ball) {
            dd($ball);
            // TODO: Implement some Error strategy
            return false; 
        }
    }
}
