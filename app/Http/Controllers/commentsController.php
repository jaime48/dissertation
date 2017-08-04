<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentsController extends Controller
{
    public function getComments(Request $request) {
       return \App\comments::where('post_id','=',$request->post_id)
           ->with('users')
           ->orderBy('created_at','desc')
           ->get();
    }

    public function submitComment(Request $request) {
        $comment = new \App\comments();
        $comment->user_id = $request->user()->id;
        $comment->content = $request->comment;
        $comment->post_id = $request->post_id;
        $comment->save();
    }
}
