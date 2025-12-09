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
        $posts = Post::all(); // select * from posts;
        $postIds = $posts->pluck('id')->all();
        // dd($postIds);
        $comments = Comment::whereIn('post_id', $postIds)->get();

        $posts->every(function ($post, $key) use ($comments) {
            return $post->comments = $comments->where('post_id', $post->id);
        });

        // dd($posts, $comments);

        // foreach ($posts as $post) {
        //     $comments = Comment::where('post_id', $post->id)->get(); // select * from comments where post_id = ?;
        // }

        return view('posts.index', ['posts' => $posts]);
    }
}
