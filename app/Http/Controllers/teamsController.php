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
        $leagueId = \App\league::where('manager_id', '=', $userInfo->id)->first()->id;
        $teamsInfo = teams::where('league_id', '=', $leagueId)->get();
        return view('league/teams')->with(['teamsInfo' => $teamsInfo->toArray()]);

    }

    /**
     * @param Request $request
     * @return mixed
     * get the teams which are available for selection
     */
    public function getSelectTeam(Request $request){
        $userInfo = $request->user();
        $leagueInfo = \App\league::where('manager_id', '=', $userInfo->id)->first();
        $teamsInfo = teams::where('league_id', '=', null)
            ->where('sports_type', '=', $leagueInfo->sports_type)
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
        $leagueInfo = \App\league::where('manager_id', '=', $userInfo->id)->first();
        $teamsInfo = teams::where('league_id', '=', $leagueInfo->id)->get();
        return $teamsInfo;
    }

    /**
     * @param Request $request
     * @return mixed
     * get selected team info
     */
    public function getCurrentTeam(Request $request){
        $teamInfo = teams::find($request->id);
        $teamInfo->league_name = $teamInfo->league->league_name;
        $teamInfo->sports_type = config('typeConvert.sportsType')[$teamInfo->sports_type];
        return $teamInfo;
    }

    /**
     * @param Request $request
     * @return $this
     * add new teams to current league
     */
    public function addTeam(Request $request){
        $userInfo = $request->user();
        $leagueInfo = \App\league::where('manager_id', '=', $userInfo->id)->first();
        foreach ($request->selectTeam as $team) {
            teams::where('id', '=', $team)->update(['league_id' => $leagueInfo->id]);
            $players = \App\teamMembers::where('team_id', '=', $team)->get();
            foreach ($players as $player) {
                $noti = new \App\notifications();
                $noti->user_id = $player->user_id;
                $noti->title   = 'msg from ' . $userInfo->first_name;
                $noti->content = 'your team has been added to ' . $leagueInfo->league_name;
                $noti->save();
            }
        }
        $teamsInfo = teams::where('league_id', '=', $leagueInfo->id)->get();
        return view('league.teams')->with(['teamsInfo' => $teamsInfo]);
    }

    /**
     * @param Request $request
     * @return int
     * delete selected team
     */
    public function deleteSelectedTeam(Request $request){
        $userInfo = $request->user();
        $leagueInfo = \App\league::where('manager_id', '=', $userInfo->id)->first();
        if (teams::where('id', '=', $request->id)->update(['league_id' => null])) {
            $players = \App\teamMembers::where('team_id', '=', $request->id)->get();
            foreach ($players as $player) {
                $noti = new \App\notifications();
                $noti->user_id = $player->user_id;
                $noti->title = 'msg from ' . $userInfo->first_name;
                $noti->content = 'your team has been deleted from ' . $leagueInfo->league_name;
                $noti->save();
            }
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
        $leagueInfo = \App\league::where('manager_id', '=', $userInfo->id)->first();
        $teamInfo = teams::where('league_id', '=', $leagueInfo->id)->orderBy('score', 'DESC')->get(['name', 'win', 'lose', 'score', 'location', 'logo']);
        $teamInfo->leagueName = $leagueInfo->league_name;
        return view('league.ranking')->with(['teamInfo' => $teamInfo]);
    }

    /********************************************************************************************************************************/
    /**
     * @param Request $request
     * @return $this
     * get team info for team manager
     */
    public function getTeamInfo(Request $request){
        $team = new teams();
        $managerInfo = $request->user();
        $teamInfo = $team::where('manager_id', '=', $managerInfo->id)->first();
        if ($teamInfo) {
            $teamInfo->manager_name = $managerInfo->first_name . ' ' . $managerInfo->last_name;
        }
        return view('team.team')->with(['teamInfo' => $teamInfo]);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * create a team,only for team manager
     */
    public function createTeam(Request $request) {
        $team = new teams();
        $userId = $request->user()->id;
        $request->logo->move(public_path('images/teams'), $request->file('logo')->getClientOriginalName());
        $request->file('fileToUpload')->storeAs('fileToUpload/'.$userId.'/',$request->file('fileToUpload')->getClientOriginalName());
        $team->name              = $request->teamName;
        $team->sports_type       = $request->sportsType;
        $team->manager_id        = $userId;
        $team->location          = $request->registeredRegion;
        $team->startTime         = date("Y-m-d H:i:s", strtotime(strtr($request->startTime, '/', '-')));
        $team->contact           = $request->contact;
        $team->email             = $request->Email;
        $team->file              = $request->file('fileToUpload')->getClientOriginalName();
        $team->logo              = $request->file('logo')->getClientOriginalName();
        $team->remarks           = $request->remarks;
        $team->save();
        \App\notifications::addNotification($userId,'Sysytem message','you have created a team');
        return redirect()->route('team.team');
    }

    /**
     * @param $infoId
     * @return \Illuminate\Http\RedirectResponse
     * export team info
     */
    public function exportTeamInfo($infoId){
        $teamInfo = teams::find($infoId);
        $teamInfo = teams::dataRefine($teamInfo);
        \App\teams::generateWord($teamInfo);
        return redirect()->route('team.team');
    }

    /**
     * @param Request $request
     * @return $this
     * get members info in the team (for team manager)
     */
    public function getMembersInfo(Request $request){
        $managerInfo = $request->user();
        $teamInfo = \App\teams::where('manager_id','=',$managerInfo->id)->first();
        $class = new \App\teamMembers();
        $membersInfo = $class::where('team_id','=',$teamInfo->id)->with('user')->get();
        foreach($membersInfo as &$info){
            $info->teamInfo = $info->team->name;
        }
        return view('team.members')->with(['memberInfo' => $membersInfo]);
    }

    /**
     * @param Request $request
     * @return mixed
     * get member info for editing
     */
    public function getMemberInfo(Request $request){
        $class = new \App\teamMembers();
        $memberInfo = $class::where('id','=',$request->id)->with('team')->with('user')->first();
        return $memberInfo;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * edit member info
     */
    public function editMemberInfo(Request $request) {
        $data = $request->all();
        unset($data['_token']);
        unset($data['member_id']);
        \App\teamMembers::where('id','=',$request->member_id)->update($data);
        return redirect('team.members');
    }

    /**
     * @param Request $request
     * @return int
     * delete member from team, sending notification to deleted member
     */
    public function deleteSelectedMember(Request $request) {
        $userInfo = $request->user();
        $noti = new \App\notifications();
        $noti->user_id = \App\teamMembers::where('id','=',$request->id)->first()->user_id;
        $teamInfo = \App\teams::where('manager_id', '=', $userInfo->id)->first();
        $flag = \App\teamMembers::where('id','=',$request->id)->delete();
        $noti->title   = 'msg from ' . $userInfo->first_name;
        $noti->content = 'you have been removed from ' . $teamInfo->name;
        $noti->save();
        if($flag){
            return 1;
        }else{
            return 0;
        }
    }

    /**
     * @return mixed
     * get selectable users for adding members to the team
     */
    public function getSelectMember() {
        $existUsers = \App\teamMembers::get(['user_id'])->toArray();
        $users = \App\users::whereIn('user_type',[1,2])->whereNotIn('id',$existUsers)->get()->toArray();
        return $users;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * adding new member to the team, sending notification
     */
    public function addNewMembers(Request $request) {
        $userInfo = $request->user();
        $teamInfo = \App\teams::where('manager_id', '=', $userInfo->id)->first();
        foreach ($request->selectMembers as $member) {
            $memberClass = new \App\teamMembers();
            $memberClass->user_id = $member;
            $memberClass->team_id = $teamInfo->id;
            $memberClass->save();

            $noti = new \App\notifications();
            $noti->user_id = $member;
            $noti->title   = 'msg from ' . $userInfo->first_name;
            $noti->content = 'you have been added to ' . $teamInfo->name;
            $noti->save();
        }
        return redirect('team.members');
    }

    public function teamMembers(Request $request){
        $userId = $request->user()->id;
        $teamInfo = \App\teams::where('manager_id', '=', $userId)->first();
        $playersInfo = \App\teamMembers::where('team_id','=',$teamInfo->id)->get();
        return $playersInfo;

    }

    public function getTeamRankingInfo(Request $request){
        $userInfo = $request->user();
        $teamInfo = \App\teams::where('manager_id', '=', $userInfo->id)->with('league')->get();
        if(!$teamInfo[0]->league_id){
            return view('team.noRanking')->with(['teamInfo' => 0]);
        }
        $teamData = teams::where('league_id', '=', $teamInfo[0]->league_id)->orderBy('score', 'DESC')->get(['name', 'win', 'lose', 'score', 'location', 'logo']);
        $teamData->leagueName = $teamInfo[0]->league->league_name;
        return view('team.ranking')->with(['teamInfo' => $teamData]);
    }

}