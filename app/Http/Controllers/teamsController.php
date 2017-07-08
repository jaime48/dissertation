<?php

namespace App\Http\Controllers;
use App\teams;
use Illuminate\Http\Request;

class teamsController extends Controller
{

    /**
     * @param Request $request
     * @return $this
     * get the teams belong to current league
     */
    public function teamsInfo(Request $request){
        $userInfo = $request->user();
        $leagueId = \App\league::where('manager_id','=',$userInfo->id)->first()->id;
        $teamsInfo = teams::where('league_id','=',$leagueId)->get();
        return view('league/teams')->with(['teamsInfo'=>$teamsInfo->toArray()]);
    }

    /**
     * @param Request $request
     * @return mixed
     * get the teams which are available for selection
     */
    public function getSelectTeam(Request $request){
        $userInfo = $request->user();
        $leagueInfo = \App\league::where('manager_id','=',$userInfo->id)->first();
        $teamsInfo = teams::where('league_id','=',null)
            ->where('sports_type','=',$leagueInfo->sports_type)
            ->get();
        return $teamsInfo;
    }

    /**
     * @param Request $request
     * @return mixed
     * get the teams that belong to current league for view details
     */
    public function fetchTeams(Request $request){
        $userInfo = $request->user();
        $leagueInfo = \App\league::where('manager_id','=',$userInfo->id)->first();
        $teamsInfo = teams::where('league_id','=',$leagueInfo->id)->get();
        return $teamsInfo;
    }

    /**
     * @param Request $request
     * @return mixed
     * get selected team info
     */
    public function getCurrentTeam(Request $request){
        $teamInfo = teams::find($request->id);
        $teamInfo->league_name =  $teamInfo->league->league_name;
        $teamInfo->sports_type =  config('typeConvert.sportsType')[$teamInfo->sports_type];
        return $teamInfo;
    }

    /**
     * @param Request $request
     * @return $this
     * add new teams to current league
     */
    public function addTeam(Request $request){
        $userInfo = $request->user();
        $leagueInfo = \App\league::where('manager_id','=',$userInfo->id)->first();
        foreach($request->selectTeam as $team){
            teams::where('id','=',$team)->update(['league_id'=>$leagueInfo->id]);
        }
        $teamsInfo = teams::where('league_id','=',$leagueInfo->id)->get();
        return view('league.teams')->with(['teamsInfo'=>$teamsInfo]);
    }

    /**
     * @param Request $request
     * @return int
     * delete selected team
     */
    public function deleteSelectedTeam(Request $request){
        if(teams::where('id','=',$request->id)->update(['league_id'=>null])){
            return 1;
        }
        return 0;
    }

    /**
     * @param Request $request
     * @return $this
     * get ranking info for ranking table
     */
    public function getRankingInfo(Request $request){
        $userInfo = $request->user();
        $leagueInfo = \App\league::where('manager_id','=',$userInfo->id)->first();
        $teamInfo = teams::where('league_id','=',$leagueInfo->id)->orderBy('score','DESC')->get(['name','win','lose','score','location','logo']);
        $teamInfo->leagueName = $leagueInfo->league_name;
        return view('league.ranking')->with(['teamInfo'=>$teamInfo]);
    }

}
