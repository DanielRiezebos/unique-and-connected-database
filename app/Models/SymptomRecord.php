<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SymptomRecord extends Pivot
{
    /** @use HasFactory<\Database\Factories\SymptomRecordFactory> */
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'symptom_id',
        'user_id',
        'startdate_symptom',
        'enddate_symptom'
    ];
}
