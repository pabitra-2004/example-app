<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $posts = DB::table('posts')
        //     ->leftJoin('comments', 'comments.post_id', 'posts.id')
        //     ->groupBy('posts.id')
        //     ->select('posts.*')
        //     ->get();


        $posts = Post::leftJoin('comments', 'comments.post_id', 'posts.id')
            ->select('posts.*', 'comments.content as comment')
            // ->groupBy('posts.id')
            ->get();
        dd($posts);
        return view('posts.index', ['posts' => $posts]);
    }
}
