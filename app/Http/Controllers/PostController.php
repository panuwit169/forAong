<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function newPost(request $request){
        $post = new Post;
        $post->user_id = $request->id;
        $post->body = $request->posttext;

        $post->save();
        return back();
    }

    public function deletePost(request $request){
        $del_post = Post::find($request->id);
        foreach($del_post->comment as $comment){
            $comment->delete();
        }
        $del_post->delete();
        return back();
    }
}
