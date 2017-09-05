<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connectionsController extends Controller
{
    //
    public function unfriend(Request $request) {
        \App\connections::where('user_id','=',$request->user()->id)
            ->where('connection_id','=',$request->id)
            ->delete();
        return 1;
    }

    public function addableFriends(Request $request) {
        $current = \App\connections::where('user_id','=',$request->user()->id)->get(['connection_id'])->toArray();
        $users = \App\users::whereNotIn('id',$current)->get();
        return $users;
    }


}
