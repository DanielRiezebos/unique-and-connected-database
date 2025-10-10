<?php

namespace App\DTO;

use App\Enums\Gender;
use App\Enums\Role;

class UserDTO
{
    public function __construct(
        public ?string $id,
        public string $email,
        public string $password,
        public Role $role,
        public Gender $gender
    ) { }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    public function getGender(): Gender
    {
        return $this->gender;
    }
}