<?php

namespace App\Enums;

enum Gender : string 
{
    case Male = 'male';
    case Female = 'female';
    case Different = 'different';
    case Unknown = 'unknown';
}