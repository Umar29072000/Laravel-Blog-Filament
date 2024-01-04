<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends \Stephenjude\FilamentBlog\Models\Post
{
    use HasFactory;

    public function scopeFilter($query, array $filters = []): void
    {
        $query->when($filters['search'] ?? false, fn ($query, $search) => 
        $query->where('title', 'LIKE', "%$search%")->orWhere('content', 'LIKE', "%$search%"));

    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
