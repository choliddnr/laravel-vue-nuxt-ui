<?php

use App\Http\Controllers\AuthController;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DashboardController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginShow'])->name('login');
    Route::get('/register', [AuthController::class, 'registerShow'])->name('register');
    Route::get('/auth/google/redirect', [AuthController::class, 'googleRedirect'])->name('auth.google.redirect');
    Route::get('/auth/google/callback', [AuthController::class, 'googleCallback'])->name('auth.google.callback');
});