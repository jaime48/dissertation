<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infoController extends Controller
{
    

    public function showInfo(Request $request) {
        $info = \App\info::where('user_id','=',$request->user()->id)->first();
        if($info){
            return view('social.home')->with(['info' =>$info]);
        }else{
            return view('social.home')->with(['info' =>(object)['phone'=>'','bio'=>'','address'=>'','email'=>'','hobby'=>'']]);
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


}
