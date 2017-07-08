<?php

namespace App\Http\Controllers;

use App\jqcalendar;
use App\teams;
use Illuminate\Http\Request;


class statisticsController extends Controller
{

    public function statistics(){


        return view('league.statistics');
    }

    /**
     * @param Request $request
     * @return array
     * getting statistics for teams
     */

    public function teamStats(Request $request) {
        $matchRecords = \App\jqcalendar::where('team1','=',$request->team_id)->orwhere('team2','=',$request->team_id)->get();
        $arr= [];
        $i = 0;
        foreach($matchRecords as $data){

            $time = explode('-',(string)$data->StartTime);
            if($data->team1 == $request->team_id){
                $data->team1_score > $data->team2_score ? $arr[$time[1]]['win'][$i]=$data : $arr[$time[1]]['lose'][$i]=$data;
            }
            if($data->team2 == $request->team_id){
                $data->team2_score > $data->team1_score ? $arr[$time[1]]['win'][$i]=$data : $arr[$time[1]]['lose'][$i]=$data;
            }

            $i++;

        }

        foreach($arr as $key => &$value){
            $value['win_num'] = array_key_exists('win',$value) ? count($value['win']): 0;
            $value['lose_num'] = array_key_exists('lose',$value) ? count($value['lose']): 0;
        }

        foreach($arr as $key => &$value){
            $value['win_rate'] = $value['win_num'] + $value['lose_num']==0 ? 0 :round($value['win_num'] / ($value['win_num'] + $value['lose_num']),2);
        }
        $arr['teamInfo'] = \App\teams::find($request->team_id);
        return $arr;

    }

    /**
     * @param Request $request
     * @return array
     * getting statistics for players
     */
    public function playerStats(Request $request) {
        $playerData = \DB::table('statistics')
            ->selectRaw(' count(*) as num, sum(points)/count(*) as points, sum(assists)/count(*) as assists, sum(fouls)/count(*) as fouls, sum(time)/count(*) as time')
            ->where('player_id', $request->playerId)
            ->groupBy('player_id')
            ->first();
        $userInfo = \App\users::find($request->playerId);
        $playerData->name = $userInfo->first_name.' '.$userInfo->last_name;
        $playerData->averPoints = round($playerData->points,2);
        $playerData->averAssists = round($playerData->assists,2);
        $playerData->averfouls = round($playerData->fouls,2);
        $playerData->averTime = round($playerData->time,2);
        $playerData->efficiency = round($playerData->time,2);

        $data = \DB::table('statistics')
            ->selectRaw('player_id, count(*) as num, sum(points)/count(*) as points, sum(assists)/count(*) as assists, sum(fouls)/count(*) as fouls, sum(time)/count(*) as time ,sum(efficiency)/count(*) as efficiency')
            ->groupBy('player_id')
            ->get();
        $pointsCompare = $assistsCompare = $foulsCompare = $timeCompare = $efficiencyCompare = 0;
        foreach($data as $val){
            $val->points > $playerData->points ? $pointsCompare+=1 :'';
            $val->assists > $playerData->assists ? $assistsCompare+=1 :'';
            $val->fouls > $playerData->fouls ? $foulsCompare+=1 :'';
            $val->time > $playerData->time ? $timeCompare+=1 :'';
            $val->efficiency > $playerData->efficiency ? $efficiencyCompare+=1 :'';
        }
        $playerData->ratioPoints     = round(1 - $pointsCompare/count($data),2)*100;
        $playerData->ratioAssists    = round(1 - $assistsCompare/count($data),2)*100;
        $playerData->ratioFouls      = round(1 - $foulsCompare/count($data),2)*100;
        $playerData->ratioTime       = round(1 - $timeCompare/count($data),2)*100;
        $playerData->ratioEfficiency = round(1 - $efficiencyCompare/count($data),2)*100;
        return (array)$playerData;

    }

    /**
     * @param Request $request
     * @return $this
     * getting all matches in the calendar
     */
    public function listMatches(Request $request) {
        $matchesInfo = jqcalendar::where('event_type','=',1)->where('user_id','=',$request->user()->id)->get();
        return view('league.update')->with(['matchesInfo' => $matchesInfo]);
    }

    /**
     * @param Request $request
     * @return $this
     * find team info for update then redirect
     */
    public function updateMatchInfo(Request $request) {
        $matchInfo = jqcalendar::find($request->matchId);
        $matchInfo->team1Name = teams::find($matchInfo->team1)->name;
        $matchInfo->team1Players = \App\teamMembers::where('team_id','=',$matchInfo->team1)->get();
        foreach($matchInfo->team1Players as &$info){
            $info->name = \App\users::find($info->user_id)->first_name.' '.\App\users::find($info->user_id)->last_name;
        }
        $matchInfo->team2Players = \App\teamMembers::where('team_id','=',$matchInfo->team2)->get();
        foreach($matchInfo->team2Players as &$info){
            $info->name = \App\users::find($info->user_id)->first_name.' '.\App\users::find($info->user_id)->last_name;
        }
        $matchInfo->team2Name = teams::find($matchInfo->team2)->name;
        $matchInfo->playersStats = $matchInfo->statistics;
        return view('league.updateMatch')->with(['matchInfo' => $matchInfo]);
    }

    /**
     * @param Request $request
     * @return int
     * update the score for a match
     */
    public function UpdateTeamScore(Request $request) {
        $flag = jqcalendar::where('id','=',$request->matchId)->update(['team1_score'=>$request->team1Score,'team2_score'=>$request->team2Score]);
        if($flag){
            return 1;
        }else{
            return 0;
        }
    }

    /**
     * @param Request $request
     * @return int
     * update the palyers' statistics
     */
    public function UpdatePlayerStats(Request $request) {
        $flag = \App\statistics::updateOrCreate(
            ['match_id' => $request->matchId, 'player_id' => $request->playerId],
            ['points' => $request->points,'assists' => $request->assists,'fouls' => $request->fouls,'time' => $request->time]
        );
        if($flag){
            return 1;
        }else{
            return 0;
        }
    }
}
