<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\league;
use Illuminate\Http\Response;
use App\users;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class leagueController extends Controller
{

    /**
     * @param Request $request
     * @return $this
     * get the league info of current user
     */
    public function getLeagueInfo(Request $request){
        $league = new league();
        $managerInfo = $request->user();
        $leagueInfo = $league::where('manager_id','=',$managerInfo->id)->first();
        if($leagueInfo){
            $leagueInfo->manager_name = $managerInfo->first_name.' '.$managerInfo->last_name;
        }
        return view('league.league')->with(['leagueInfo'=>$leagueInfo]);

    }

    /**
     * @param Request $request
     * @param $file
     * @return mixed
     * download stored file
     */
    public function downLoadFile(Request $request,$file){
        $userId = $request->user()->id;
        return response()->download(storage_path().'/app/fileToUpload/'.$userId.'/'.$file);
        
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * create a league for current user
     */
    public function createLeague(Request $request){
        $league = new league();
        $userId = $request->user()->id;
        $request->file('fileToUpload')->storeAs('fileToUpload/'.$userId,$request->file('fileToUpload')->getClientOriginalName());
        $league->league_name       = $request->leagueName;
        $league->sports_type       = $request->sprotsType;
        $league->manager_id        = $userId;
        $league->registered_region = $request->registeredRegion;
        $league->start_time        = date("Y-m-d H:i:s", strtotime(strtr($request->startTime, '/', '-')));
        $league->end_time          = date("Y-m-d H:i:s", strtotime(strtr($request->endTime, '/', '-')));
        $league->contact           = $request->contact;
        $league->email             = $request->Email;
        $league->file              = $request->file('fileToUpload')->getClientOriginalName();
        $league->remarks           = $request->remarks;
        $league->save();
        return redirect()->route('league');
    }

    /**
     * @param $infoId
     * export the uploaded file into word file
     */
    public function exportInfo($infoId){
        $leagueInfo = league::find($infoId);
        $leagueInfo = league::dataRefine($leagueInfo);
        league::generateWord($leagueInfo);
    }
    

}
