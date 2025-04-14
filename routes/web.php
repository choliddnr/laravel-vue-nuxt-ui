<?php

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DashboardController;



Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/blog', function () {
    return view('blog', ['articles' => Article::with('author', 'category')->filter(request()->all())->latest()->paginate(10)->withQueryString()]);
})->name('blog');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/author/{user:username}', function (User $user) {
    return view('blog', ['articles' => $user->articles->load('author', 'category')]);
})->name('author');

Route::get('/category/{category:slug}', function (Category $category) {
    return view('blog', ['articles' => $category->articles->load('author', 'category')]);
})->name('category');

Route::get('/blog/{article:slug}', function (Article $article) {
    return view('article', ['article' => $article]);
})->name('post');



// Route::get('/dashboard/test', [DashboardController::class, 'test'])->name('test');

// Route::get('/', fn(Request $request) => view('home'))
//     ->name('home');

// Route::get('/blog', fn(Request $request) => view('blog'))
//     ->name('blog');
// Route::get('/contact', fn(Request $request) => view('contact'))
//     ->name('contact');
// Route::get('/about', fn(Request $request) => view('about'))
//     ->name('about');


require __DIR__ . '/dashboard.php';
require __DIR__ . '/auth.php';