<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Symptom extends Model
{
    /** @use HasFactory<\Database\Factories\SymptomFactory> */
    use HasFactory;
    use HasUuids;
}
