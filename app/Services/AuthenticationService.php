<?php

namespace App\Services;

use App\DTO\UserDTO;
use App\Models\User;

class AuthenticationService
{
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
            // TODO: Implement some Error strategy
            return false; 
        }
    }
}
