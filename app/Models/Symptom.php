<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Symptom extends Model
{
    /** @use HasFactory<\Database\Factories\SymptomFactory> */
    use HasFactory;
    use HasUuids;
    
    public $fillable = [
        'title',
        'description'
    ];

    public function users() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'symptom_records')
                    ->using(SymptomRecord::class)
                    ->withPivot(['startdate_symptom', 'enddate_symptom']);
    }
}
