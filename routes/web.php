<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'home');
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
