<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\teamMembers;

class teamMembersController extends Controller
{


    public function getMembersInfo(Request $request){
        $managerInfo = $request->user();
        $leagueInfo = \App\league::where('manager_id','=',$managerInfo->id)->first();
        $teamsInfo = \App\teams::where('league_id','=',$leagueInfo->id)->get(['id'])->toArray();
        $class = new \App\teamMembers();
        $membersInfo = $class::whereIn('team_id',$teamsInfo)->with('team')->get();
        foreach($membersInfo as &$info){
            $info->teamInfo = $info->team->name;
        }
        return view('league.members')->with(['memberInfo' => $membersInfo]);
    }

    public function getTeamMembersInfo(Request $request){
        $managerInfo = $request->user();
        $leagueInfo = \App\league::where('manager_id','=',$managerInfo->id)->first();
        $membersInfo = teamMembers::with(['team' =>function($query) use ($leagueInfo) {
            $query->where('league_id','=',$leagueInfo->id);
        }])->with('user')->where('team_id','=',$request->team_id)->get();

        foreach($membersInfo as &$info){
            $info->teamInfo = $info->team->name;
        }
        return $membersInfo;

    }

}
