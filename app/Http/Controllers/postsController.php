<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postsController extends Controller
{
    //
    public function getAllPosts(Request $request){
        $posts = \App\posts::with('users')->with('comments')
            ->where('posts.user_id','=',$request->user()->id)
            ->get();
        foreach($posts as &$val){
            $val->comments_num = count($val->comments);
        }
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


}
