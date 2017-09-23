<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messagesController extends Controller
{
    /**
     * @param Request $request
     * get the messges records
     */
    public function getMessages(Request $request) {
        $fromMsg = \App\messages::where('from_id','=',$request->user()->id)
            ->where('to_id','=',$request->friend_id)->get()->toArray();
        foreach($fromMsg as &$val){
            $val['direction'] = 'from';
            $info = \App\users::find($request->user()->id);
            $val['name'] = $info->first_name.' '.$info->last_name;
            $avatar = \App\info::where('user_id','=',$request->user()->id)->first();
            isset($avatar->avatar) ? $val['avatar'] = $avatar->avatar : $val['avatar'] ='blank.jpg';
        }

        $toMsg = \App\messages::where('from_id','=',$request->friend_id)
            ->where('to_id','=',$request->user()->id)->get()->toArray();
        foreach($toMsg as &$val){
            $val['direction'] = 'to';
            $info = \App\users::find($request->friend_id);
            $val['name'] = $info->first_name.' '.$info->last_name;
            $avatar = \App\info::where('user_id','=',$request->friend_id)->first();
            isset($avatar->avatar) ? $val['avatar'] = $avatar->avatar : $val['avatar'] ='blank.jpg';
        }
        $data = array_merge($fromMsg,$toMsg);
        usort($data, function($a,$b){
            $t1 = strtotime($a['created_at']);
            $t2 = strtotime($b['created_at']);
            return $t1 - $t2;
        });
        return $data;
    }

    public function sendMessage(Request $request) {
        $message = new \App\messages();
        $message->from_id = $request->user()->id;
        $message->to_id = $request->to_id;
        $message->text = $request->msg;
        $message->save();
        return 1;
    }

    public function getGroupMsg(Request $request) {
        $msgs = \App\messages::where('group_id','=',$request->group_id)->orderBy('created_at','asc')->get()->toArray();
        foreach($msgs as &$val){
            if($val['from_id'] == $request->user()->id){
                $val['direction'] = 'from';
            }else{
                $val['direction'] = 'to';
            }
            $avatar = \App\info::where('user_id','=',$val['from_id'])->first();
            isset($avatar->avatar) ? $val['avatar'] = $avatar->avatar : $val['avatar'] ='blank.jpg';
            $info = \App\users::find($val['from_id']);
            $val['name'] = $info->first_name.' '.$info->last_name;
        }
        return $msgs;
    }

    public function sendGroupMessage(Request $request) {
        $message = new \App\messages();
        $message->from_id = $request->user()->id;
        $message->group_id = $request->group_id;
        $message->text = $request->msg;
        $message->save();
        return 1;
    }
}
