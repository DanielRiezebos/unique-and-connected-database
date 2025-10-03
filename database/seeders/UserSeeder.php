<?php

namespace Database\Seeders;

use App\Models\Symptom;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();
        foreach (User::all() as $user) {
            $user->symptoms()->attach(Symptom::inRandomOrder()->limit(3)->get(), ['startdate_symptom' => now()]);
        }
    }
}
