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

        $query->when($filters['category'] ?? false, fn ($query, $category) =>
        $query->whereHas('category', function($query) use ($category) {
            $query->where('slug', $category);
        }));

        $query->when($filters['author'] ?? false, fn ($query, $author) =>
        $query->whereHas('author', function($query) use ($author) {
            $query->where('name', 'LIKE', "%$author%");
        }));
    }

    public static function getRelatedPosts(Post $post, int $count = 4, bool $shuffle = false)
    {
        $relatedPosts = collect();
        $allPosts = Post::all();

        foreach ($allPosts as $otherPost) {
            if ($otherPost->id != $post->id) {
                similar_text($otherPost->title, $post->title, $percent);

                if ($percent > 10) {
                    $relatedPosts->push($otherPost);

                    if ($relatedPosts->count() == $count) {
                        return $relatedPosts->shuffle();
                    }
                }
            }
        }

        if ($relatedPosts->count() < $count) {
            $sameCategoryPosts = Post::where('blog_category_id', $post->blog_category_id)
            ->whereNot('id', $post->id)
            ->whereNotIn('id', $relatedPosts->pluck('id')->toArray())
            ->take($count - $relatedPosts->count())
            ->get();

            $relatedPosts = $relatedPosts->concat($sameCategoryPosts);
        }

        if ($relatedPosts->count() < $count) {
            $sameAuthorPosts = Post::where('blog_author_id', $post->blog_author_id)
            ->whereNot('id', $post->id)
            ->whereNotIn('id', $relatedPosts->pluck('id')->toArray())
            ->take($count - $relatedPosts->count())
            ->get();

            $relatedPosts = $relatedPosts->concat($sameAuthorPosts);
        }

        if ($relatedPosts->count() < $count) {
            $randomPosts = Post::whereNot('id', $post->id)
            ->whereNotIn('id', $relatedPosts->pluck('id')->toArray())
            ->inRandomOrder()
            ->take($count - $relatedPosts->count())
            ->get();

            $relatedPosts = $relatedPosts->concat($randomPosts);
        }

        return $shuffle ? $relatedPosts->shuffle() : $relatedPosts;
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
