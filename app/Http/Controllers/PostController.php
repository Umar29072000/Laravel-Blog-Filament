<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function welcome()
    {
        return view('welcome', [
            'posts' => Post::latest()->paginate(9)
        ]);
    }

    public function show(Post $post)
    {
        return view('post.show',  [
            'post' => $post, 
        ]);
    }
}
