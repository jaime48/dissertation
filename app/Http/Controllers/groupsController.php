<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class groupsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * create a group
     */
    public function createGroup(Request $request) {
        $group = new \App\groups();
        $group->name=$request->name;
        $group->creator_id = $request->user()->id;
        $group->members_id = serialize($request->members_id);
        $group->save();
        return redirect()->route('social.home');
    }

    /**
     * @param Request $request
     * @return array
     * show current members in the group
     */
    public function getGroupMembers(Request $request) {
        $data = \App\groups::find($request->group_id);
        unserialize($data->members_id) ? $ids=unserialize($data->members_id):$ids=[];
        $members = \App\users::whereIn('id',$ids)->with('info')->get()->toArray();
        if($members){
            foreach($members as &$val){
                if(!isset($val['info']['avatar'])){
                    $val['info']['avatar']='blank.png';
                }
            }
        }

        return $members;
    }

    /**
     * @param Request $request
     * @return int
     * @throws \Exception
     * delete a group
     */
    public function deleteGroup(Request $request) {
        \App\groups::where('id','=',$request->id)->delete();
        return 1;
    }

    public function leaveGroup(Request $request) {
        $group = \App\groups::find($request->id);
        $members = array_diff(unserialize($group->members_id), [$request->user()->id] );
        $handle = $group->update(['members_id'=>serialize($members)]);
        if($handle){
            return 1;
        }else{
            return 0;
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * add members in the group
     */
    public function confirmAddMembers(Request $request) {
        $handle = \App\groups::find($request->addedToGroupId);
        $handle->update(['members_id'=>serialize(array_merge($request->addMembers,unserialize($handle->members_id)))]);
        return redirect('social');
    }


}
