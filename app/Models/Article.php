<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'author_id',
        'category_id',
        'status'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // public function filter(array $filters): array
    // {
    //     $query = Article::query();

    //     if (isset($filters['search'])) {
    //         $query->where('title', 'like', '%' . $filters['search'] . '%');
    //     }

    //     if (isset($filters['category'])) {
    //         $query->where('category_id', $filters['category']);
    //     }

    //     return $query->get()->toArray();
    // }
    public function scopeFilter(Builder $query, array $filter): void
    {
        $query->when($filter['search'] ?? false, function (Builder $query, string $search) {

            $query->where('title', 'like', '%' . $search . '%');
            // ->orWhere('content', 'like', '%' . $search . '%');
        });
        $query->when($filter['category'] ?? false, function (Builder $query, string $category) {
            $query->whereHas('category', function (Builder $query) use ($category) {
                $query->where('slug', $category);
            });
        });
        $query->when($filter['author'] ?? false, function (Builder $query, string $author) {
            $query->whereHas('author', function (Builder $query) use ($author) {
                $query->where('username', $author);
            });
        });
        // $query->where('title', 'like', '%' . request('search') . '%');
        // dump($query->get());
    }

}
