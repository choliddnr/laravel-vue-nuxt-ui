<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleCollection;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:draft,published',
        ]);

        $article = new Article();
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->category_id = $request->input('category_id');
        $article->status = $request->input('status');
        $article->author_id = auth()->id(); // Assuming you have an authenticated user
        $article->slug = Str::slug($request->input('title') . '-' . now()->timestamp); // Generate a slug from the title
        $article->save();

        // return $article;
        return response()->json($article);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // Find the article by ID
        $article = Article::findOrFail($id);
        // Return the article as a resource
        return response()->json($article);
        // dd($article);
        // return new ArticleCollection($article);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:draft,published',
        ]);
        // Find the article by ID
        $article = Article::findOrFail($id);
        // Update the article
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->category_id = $request->input('category_id');
        $article->status = $request->input('status');
        $article->author_id = auth()->id(); // Assuming you have an authenticated user
        $article->slug = Str::slug($request->input('title') . '-' . now()->timestamp); // Generate a slug from the title
        $article->save();
        // Return the updated article as a resource
        return response()->json($article);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //destroy
        $article = Article::findOrFail($id);
        $article->delete();
        // Return a success response
        return response()->json([
            'message' => 'Article deleted successfully',
        ]);
    }

    public function updateStatus(Request $request, string $id)
    {
        // Validate the request
        $request->validate([
            'status' => 'required|in:draft,published,archived',
        ]);
        // Get the articles based on the status
        $articles = Article::findOrFail($id);
        // Update the article status
        $articles->status = $request->input('status');
        $articles->save();
        // Return the articles as a resource
        return response()->json($articles);
    }
}
