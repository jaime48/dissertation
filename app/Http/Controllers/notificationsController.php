<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notificationsController extends Controller
{

    /**
     * @param Request $request
     * @return mixed
     * get notifications to show
     */
    public function getNotifications(Request $request) {
        if(isset($request->user()->id)){
            $notifications = \App\notifications::where('user_id','=',$request->user()->id)
                ->orderBy('is_read','asc')->orderBy('created_at','desc')->get()->toArray();
            $count = \DB::table('notifications')->where('is_read','=',0)->where('user_id','=',$request->user()->id)->count();
            $data["countNotRead"] = $count;
            $data['notifications'] = $notifications;
            return $data;
        }

        return 0;
    }

    /**
     * @param Request $request
     * @return int
     * set notification to read. one or all
     */
    public function setRead(Request $request) {
        if($request->id){
            $flag = \App\notifications::where('id','=',$request->id)->update(['is_read'=>1]);
        }else{
            $flag = \App\notifications::where('user_id','=',$request->user()->id)->update(['is_read'=>1]);
        }

        if($flag){
            return 1;
        }else{
            return 0;
        }
    }


}
