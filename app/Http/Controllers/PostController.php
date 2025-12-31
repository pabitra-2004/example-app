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
        /**
         * another way**/

        // $posts = Post::all(); // select * from posts;
        // $postIds = $posts->pluck('id')->all(); // extract all post ids from $posts
        // // dd($postIds);
        // $comments = Comment::whereIn('post_id', $postIds)->get(); // select * from comments where post_id in [?,?,?,?,...];

        // // map every post with their respective comments
        // $posts->every(function ($post, $key) use ($comments) {
        //     // extract respectie comments and add as an attribute named 'comments'
        //     return $post->comments = $comments->where('post_id', $post->id);
        // });

        // dd($posts, $comments);

        // foreach ($posts as $post) {
        //     $comments = Comment::where('post_id', $post->id)->get(); // select * from comments where post_id = ?;
        // }

        // best way
        // $comment = Post::leftJoin('comments', 'posts.id', 'comments.post_id')
        //     ->selectRaw('posts.id, posts.content,  COUNT(comments.id) AS count_comment')
        //     ->groupBy('posts.id')
        //     ->get()
        //     ->toArray();

        
        
        $comment = Post::select('id', 'content')->withCount('comments')           
            ->get();
   
        dd($comment);
        // return response()->json(['results' => $comment], options: JSON_PRETTY_PRINT);
    }
}
