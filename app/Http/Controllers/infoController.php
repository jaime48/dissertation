<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infoController extends Controller
{


    public function showInfo(Request $request) {
        $info = \App\info::with('user')
            ->with(['connections' => function ($query) {
                $query->with('users')->with('info');
            }])
            ->where('user_id','=',$request->user()->id)->first();
        $name = $request->user()->first_name.' '.$request->user()->last_name;
        if($info){
            return view('social.home')->with(['info' =>$info]);
        }else{
            return view('social.home')->with(['info' =>(object)['phone'=>'','bio'=>'','address'=>'','email'=>'','hobby'=>'','user_name'=>$name,'avatar'=>'']]);
        }
    }

    public function editInfo(Request $request) {
        $handle = \App\info::updateOrCreate(
            ['user_id' => $request->user()->id],
            [$request->data['name']=>$request->data['value']]

        );
        if($handle){
            return 1;
        }else{
            return 0;
        }
    }


    public function uploadAvatar(Request $request) {
        $fileName = $request->user()->id.'_'.$request->file('avatar')->getClientOriginalName();
                $request->avatar->move(public_path('images/avatar/'), $fileName);

        $handle = \App\info::updateOrCreate(
            ['user_id' => $request->user()->id],
            ['avatar'=>$fileName]

        );

        return redirect('social.home');


        }

    public function seeProfile(Request $request) {
        $info = \App\info::with('user')->where('user_id','=',$request->friend_id)->first();

        $user = \App\users::where('id','=',$request->friend_id)->first();
        $name = $user->first_name.' '.$user->last_name;
        if($info){
            return view('social.seeProfile')->with(['info' =>$info]);
        }else{
            return view('social.seeProfile')->with(['info' =>(object)['phone'=>'','bio'=>'','address'=>'','email'=>'','hobby'=>'','user_name'=>$name,'avatar'=>'']]);
        }

    }



}
