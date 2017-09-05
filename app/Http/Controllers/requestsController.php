<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\requests;
class requestsController extends Controller
{
    /**
     * @param Request $request
     * create adding friends request
     */
    public function friendsRequest(Request $request) {

        $arr = $request->ids;
        foreach($arr as &$val){
            $val['from_id'] = $request->user()->id;
            $val['type']    = 1;
            $val['created_at'] = date('Y-m-d H:i:s');
        }
         requests::insert($arr);

    }

    /**
     * @param Request $request
     * @return mixed
     * get all requests
     */
    public function getRequests(Request $request) {
        $requests = requests::with('users')->where('to_id','=',$request->user()->id)->get()->toArray();
        //print_r($requests);exit;
        foreach($requests as &$val){
            $val['status'] = config('typeConvert.requestStatus')[$val['status']];
        }
        $num = \DB::table('requests')->where('to_id','=',$request->user()->id)->where('status','=',0)->count();
        $data['num'] = $num;
        $data['requests'] = $requests;
        return $data;
    }

    public function acceptFriend(Request $request) {
        $handle = requests::where('id','=',$request->id)->update(['status'=>1]);
        $data = requests::where('id','=',$request->id)->first();
        $conncs = [
            ['user_id'=>$data->from_id,'connection_id'=>$data->to_id,'created_at'=>date('Y-m-d H:i:s')],
            ['user_id'=>$data->to_id,'connection_id'=>$data->from_id,'created_at'=>date('Y-m-d H:i:s')]

        ];
        \App\connections::insert($conncs);

    }

    public function declineFriend(Request $request) {
        requests::where('id','=',$request->id)->update(['status'=>2]);
    }
}
