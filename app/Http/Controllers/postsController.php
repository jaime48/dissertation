<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postsController extends Controller
{

    public function getAllPosts(Request $request){
        $posts = \App\posts::with('users')->with('comments')
            ->where('posts.user_id','=',$request->user()->id)->orderBy('created_at','desc')->get();
        foreach($posts as &$val){
            $val->comments_num = count($val->comments);
        }
        $posts->connections = \App\connections::with('users')->where('user_id','=',$request->user()->id)
            ->orderBy('created_at','desc')->get();
        return view('social.posts')->with(['posts' => $posts]);
    }

    public function createPost() {
        return view('social.createNew');
    }

    public function createPostSubmit(Request $request) {
        $fileType = explode('/' , $request->post->getMimeType());
        $newPost = new \App\posts();
        $newPost->user_id = $request->user()->id;
        $newPost->title = $request->title;
        $newPost->text = $request->text;
        $newPost->type = $fileType[0] == 'video'? 1 : 0;
        $newPost->save();
        $fileName = $newPost->id.'_'.$request->file('post')->getClientOriginalName();
        switch ($fileType[0]) {
            case 'image':
                $request->post->move(public_path('posts/pictures'), $fileName);
                $url = 'pictures/'.$fileName;
                break;
            case 'video':
                $request->post->move(public_path('posts/videos'), $fileName);
                $url = 'videos/'.$fileName;
                break;
        }
        $newPost->update(['url'=>$url]);
        return redirect()->route('social');

    }

    public function likeOrDislike(Request $request) {
        $post = \App\posts::find($request->post_id);
        $likeDislikeId = \App\posts::find($request->post_id)->like_dislike_id;
        empty($likeDislikeId) ? $arr = [] : $arr = unserialize($likeDislikeId);
        if(in_array($request->user()->id , $arr)){
            return 0;
        }
        if($request->likeOrDislike == 1){
            \App\posts::where('id','=',$request->post_id)->update(['like' =>$post->like+1]);
        }else{
            \App\posts::where('id','=',$request->post_id)->update(['like' =>$post->dislike+1]);
        }
        array_push($arr,$request->user()->id);
        \App\posts::where('id','=',$request->post_id)->update(['like_dislike_id' =>serialize($arr)]);
        return 1;

    }


}
