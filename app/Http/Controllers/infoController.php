<?php

namespace App\Http\Controllers;

use App\connections;
use Illuminate\Http\Request;

class infoController extends Controller
{

    /**
     * @param Request $request
     * @return $this
     * show info,connections on the social home page
     */
    public function showInfo(Request $request) {
        $info = \App\info::with('user')->where('user_id','=',$request->user()->id)->first();
        $connections = \App\connections::with('users')->with('info')->where('user_id','=',$request->user()->id)->get();
        $name = $request->user()->first_name.' '.$request->user()->last_name;
        $ownedGroups = \App\groups::where('creator_id','=',$request->user()->id)->get();
        $AllGroups = \App\groups::get();
        foreach($AllGroups as $group){
            unserialize($group->members_id)? $members = unserialize($group->members_id) :$members = [];
            if(in_array($request->user()->id,$members)){
                $joinedGroups[] = $group;
            }
        }
        isset($joinedGroups) ? '':$joinedGroups=[];
        $groups = ['ownedGroups'=>$ownedGroups,'joinedGroups'=>$joinedGroups];
        if($info){
            return view('social.home')->with(['info' =>$info,'connections'=>$connections,'groups'=>$groups]);
        }else{
            return view('social.home')->with(['info' =>
                (object)['phone'=>'','bio'=>'','address'=>'','email'=>'','hobby'=>'','user_name'=>$name,'avatar'=>'','connections'=>'']]);
        }
    }

    /**
     * @param Request $request
     * @return int
     * edit personal profile
     */
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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * update profile photo
     */
    public function uploadAvatar(Request $request) {
        $fileName = $request->user()->id.'_'.$request->file('avatar')->getClientOriginalName();
        $request->avatar->move(public_path('images/avatar/'), $fileName);

        $handle = \App\info::updateOrCreate(
            ['user_id' => $request->user()->id],
            ['avatar'=>$fileName]

        );

        return redirect('social.home');
    }

    /**
     * @param Request $request
     * @return $this
     * see connection's profile
     */
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

    /**
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     * get current friends
     */
    public function getFriends(Request $request) {
        $info = \App\connections::where('user_id','=',$request->user()->id)
            ->with('users')->get();
        return $info;
    }



}
