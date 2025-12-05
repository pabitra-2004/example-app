<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Post::all();
        $comments = Comment::all();

        return view('posts.index', ['posts' => $posts, 'comments' => $comments]);
    }
}
