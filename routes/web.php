<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/', 'Home')->name('home');

Route::middleware('guest')->group(function() {
  Route::inertia('/register', 'Auth/Register')->name('register');
});