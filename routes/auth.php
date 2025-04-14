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

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    // Route::get('/dashboard/articles', [DashboardController::class, 'articles'])->name('dashboard.articles');
    // Route::get('/dashboard/articles/{article:slug}', [DashboardController::class, 'article'])->name('dashboard.article');
    // Route::get('/dashboard/categories', [DashboardController::class, 'categories'])->name('dashboard.categories');
    // Route::get('/dashboard/categories/{category:slug}', [DashboardController::class, 'category'])->name('dashboard.category');
});