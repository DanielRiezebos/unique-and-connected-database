<?php

namespace App\Enums;

enum Role: string
{
    case Administrator = 'ROLE_ADMINISTRATOR';
    case User = 'ROLE_USER';
    case Unregistered = 'ROLE_UNREGISTERED';
}
