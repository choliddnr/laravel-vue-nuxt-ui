<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleCollection;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('index');
    }


    public function articles(Request $request)
    {
        // $articles_ = Article::with('author', 'category')->filter(request()->all())->latest()->paginate(10)->withQueryString();
        // dump($articles_);

        // $articles_collection = new ArticleCollection(Article::with('author', 'category')->filter(request()->all())->latest()->paginate(10)->withQueryString());
        // dump($articles_collection);
        return Inertia::render('articles', [
            // 'articles' => Article::with('author', 'category')->filter(request()->all())->latest()->paginate(10)->withQueryString(),
            'categories' => Category::all(),
            // 'user' => $request->user(),
        ]);
    }
    public function inbox(Request $request)
    {
        return Inertia::render('inbox');
    }
    public function customers(Request $request)
    {
        return Inertia::render('customers');
    }
    public function settings_index(Request $request)
    {
        return Inertia::render('settings/index');
    }
    public function settings_members(Request $request)
    {
        return Inertia::render('settings/members');
    }
    public function settings_notifications(Request $request)
    {
        return Inertia::render('settings/notifications');
    }
    public function settings_security(Request $request)
    {
        return Inertia::render('settings/security');
    }
}
