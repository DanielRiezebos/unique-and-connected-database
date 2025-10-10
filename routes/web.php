<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('registration');
})->name('register');
Route::get('/thanks', function () {
    return view('thanksforregistering');
})->name('thanksforregistering');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('registration.post');