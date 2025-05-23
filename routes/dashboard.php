<?php

use App\Http\Controllers\ArticleController;
use App\Http\Resources\ArticleCollection;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DashboardController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/articles', [DashboardController::class, 'articles'])->name('dashboard.articles');
    Route::get('/dashboard/blog', function () {
        return new ArticleCollection(Article::with('author', 'category')->filter(request()->all())->latest()->paginate(10)->withQueryString());
    })->name('dashboard.blog');
    Route::get('/dashboard/inbox', [DashboardController::class, 'inbox'])->name('dashboard.inbox');
    Route::get('/dashboard/customers', [DashboardController::class, 'customers'])->name('dashboard.customers');
    Route::get('/dashboard/settings', [DashboardController::class, 'settings_index'])->name('dashboard.settings');
    Route::get('/dashboard/settings/members', [DashboardController::class, 'settings_members'])->name('dashboard.settings.members');
    Route::get('/dashboard/settings/notifications', [DashboardController::class, 'settings_notifications'])->name('dashboard.settings.notifications');
    Route::get('/dashboard/settings/security', [DashboardController::class, 'settings_security'])->name('dashboard.settings.security');

    Route::patch('/articles/{article}/status', [ArticleController::class, 'updateStatus'])->name('articles.updateStatus');
    Route::resource('articles', ArticleController::class)->except(['index', 'create', 'edit']);
});