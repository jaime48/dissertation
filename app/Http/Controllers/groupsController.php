<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class groupsController extends Controller
{
    //
    public function createGroup(Request $request) {
        print_r($request->all());
        $group = new \App\groups();
        $group->name=$request->name;
        $group->creator_id = $request->user()->id;
        $group->members_id = serialize($request->members_id);
        $group->save();
        return redirect()->route('social.home');
//        $post = \App\groups::find($request->post_id);
//        $likeDislikeId = \App\posts::find($request->post_id)->like_dislike_id;
//        empty($likeDislikeId) ? $arr = [] : $arr = unserialize($likeDislikeId);
//        if(in_array($request->user()->id , $arr)){
//            return 0;
//        }
//        if($request->likeOrDislike == 1){
//            \App\posts::where('id','=',$request->post_id)->update(['like' =>$post->like+1]);
//        }else{
//            \App\posts::where('id','=',$request->post_id)->update(['like' =>$post->dislike+1]);
//        }
//        array_push($arr,$request->user()->id);
//        \App\posts::where('id','=',$request->post_id)->update(['like_dislike_id' =>serialize($arr)]);
//        return 1;
    }

    public function getGroupMembers(Request $request) {
        $data = \App\groups::find($request->group_id);
        $members = \App\users::whereIn('id',unserialize($data->members_id))->with('info')->get()->toArray();
        foreach($members as &$val){
            if(!isset($val['info']['avatar'])){
                $val['info']['avatar']='blank.png';
            }
        }
        return $members;
    }


}
