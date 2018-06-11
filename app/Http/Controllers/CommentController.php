<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function newComment(request $request){
        $comment = new Comment;
        $comment->user_id = $request->user_id;
        $comment->post_id = $request->post_id;
        $comment->body=$request->comment;

        $comment->save();
        return back();
    }
}
