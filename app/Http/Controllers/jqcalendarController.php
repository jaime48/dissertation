<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\jqcalendar;

class jqcalendarController extends Controller
{
    //

    public function testCalendar(Request $request){
        $userId = $request->user()->id;
        $ret = $this->listCalendar($request->showdate, $request->viewtype,$userId);

        return json_encode($ret);
    }

    public function addCalendar(Request $request){
        $ret = array();
        $db = new \App\jqcalendar();
        $userId = $request->user()->id;
        $db->user_id = $userId;
        $db->subject = $request->CalendarTitle;
        $db->starttime = $this->php2MySqlTime($this->js2PhpTime($request->CalendarStartTime));
        $db->endtime = $this->php2MySqlTime($this->js2PhpTime($request->CalendarEndTime));
        $db->isalldayevent = $request->IsAllDayEvent;
        $add = $db->save();
        if($add){
            $ret['IsSuccess'] = true;
            $ret['Msg'] = 'add success';
            $ret['Data'] = 'success';
        }else{
            $ret['IsSuccess'] = false;
            $ret['Msg'] = 'error';

        }
        return json_encode($ret);
    }


    function listCalendar($day, $type,$id){
        $phpTime = $this->js2PhpTime($day);
        //echo $phpTime . "+" . $type;
        switch($type){
            case "month":
                $st = mktime(0, 0, 0, date("m", $phpTime), 1, date("Y", $phpTime));
                $et = mktime(0, 0, -1, date("m", $phpTime)+1, 1, date("Y", $phpTime));
                break;
            case "week":
                //suppose first day of a week is monday
                $monday  =  date("d", $phpTime) - date('N', $phpTime) + 1;
                //echo date('N', $phpTime);
                $st = mktime(0,0,0,date("m", $phpTime), $monday, date("Y", $phpTime));
                $et = mktime(0,0,-1,date("m", $phpTime), $monday+7, date("Y", $phpTime));
                break;
            case "day":
                $st = mktime(0, 0, 0, date("m", $phpTime), date("d", $phpTime), date("Y", $phpTime));
                $et = mktime(0, 0, -1, date("m", $phpTime), date("d", $phpTime)+1, date("Y", $phpTime));
                break;
        }

        return $this->listCalendarByRange($st, $et,$id);
    }

    public function deleteCalendar(Request $request){
        $ret = array();
        $db = new \App\jqcalendar();
        $db::where('id','=',$request->calendarId)->delete();
        if($db){
            $ret['IsSuccess'] = true;
            $ret['Msg'] = 'Succefully';
        }else{
            $ret['IsSuccess'] = false;
            $ret['Msg'] = 'error';

        }
        return $ret;
    }

    public function updateCalendar(Request $request){
        $ret = array();

        $db = new \App\jqcalendar();

        $res = $db::where('id','=',$request->calendarId)->update(
            ['starttime'=>$this->php2MySqlTime($this->js2PhpTime($request->CalendarStartTime)),
                'endtime'=>$this->php2MySqlTime($this->js2PhpTime($request->CalendarEndTime))]);
        if($res){
            $ret['IsSuccess'] = true;
            $ret['Msg'] = 'Succefully';

        }else{
            $ret['IsSuccess'] = false;
            $ret['Msg'] = "error";
        }

        return $ret;
    }

    public function updateTeamCalendar(Request $request){
        $ret = array();

        $db = new \App\jqcalendar();

        $res = $db::where('id','=',$request->calendarId)->update(
            ['starttime'=>$this->php2MySqlTime($this->js2PhpTime($request->CalendarStartTime)),
                'endtime'=>$this->php2MySqlTime($this->js2PhpTime($request->CalendarEndTime))]);
        if($res){
            $ret['IsSuccess'] = true;
            $ret['Msg'] = 'Succefully';

        }else{
            $ret['IsSuccess'] = false;
            $ret['Msg'] = "error";
        }

        return $ret;
    }

    public function editCalendar(Request $request){
        $db = new \App\jqcalendar();
        $event = $db::where('Id','=',$request->id)->first();
        //print_r($reuqest->all());

        return $event;
    }
    public function editCalendarInfo(Request $request){
//        $db = new \App\jqcalendar();
//        $event = $db::where('Id','=',$request->id)->first();
        //print_r($reuqest->all());

        return redirect('calendar');

    }
    public function updateCalendarInfo(Request $request){
        $db = new \App\jqcalendar();
        //print_r($request->all());exit;
        $data = [
            'Subject'=>$request->Subject,
            'Location'=>$request->Location,
            'StartTime'=>$request->stpartdate,
            'EndTime'=>$request->etpartdate,
            'Description'=>$request->Description,

        ];
        $db::where('id','=',$request->calendarId)->update($data);
        return redirect('calendar');
    }

    public function updateTeamCalendarInfo(Request $request){
        $db = new \App\jqcalendar();
        //print_r($request->all());exit;
        $data = [
            'Subject'=>$request->Subject,
            'Location'=>$request->Location,
            'StartTime'=>$request->stpartdate,
            'EndTime'=>$request->etpartdate,
            'Description'=>$request->Description,

        ];
        $db::where('id','=',$request->calendarId)->update($data);
        return redirect('team.calendar');
    }


    public function deleteTeamCalendar(Request $request){
        $ret = array();
        $db = new \App\jqcalendar();
        $db::where('id','=',$request->calendarId)->delete();
        if($db){
            $ret['IsSuccess'] = true;
            $ret['Msg'] = 'Succefully';
        }else{
            $ret['IsSuccess'] = false;
            $ret['Msg'] = 'error';

        }
        return $ret;
    }


    function listCalendarByRange($sd, $ed,$id){
        $ret = array();
        $ret['events'] = array();
        $ret["issort"] =true;
        $ret["start"] = $this->php2JsTime($sd);
        $ret["end"] = $this->php2JsTime($ed);
        $ret['error'] = null;
        //try{


        $db = new \App\jqcalendar();
        $data = $db::where('starttime','>',$this->php2MySqlTime($sd))
            ->where('starttime','<',$this->php2MySqlTime($ed))
            ->where('user_id','=',$id)
            ->orderBy('starttime', 'ASC')
            ->get();
        foreach($data as $row){
            $ret['events'][] = array(
                $row->Id,
                $row->Subject,
                $this->php2JsTime($this->mySql2PhpTime($row->StartTime)),
                $this->php2JsTime($this->mySql2PhpTime($row->EndTime)),
                $row->IsAllDayEvent,
                ($row->IsAllDayEvent!=1 && date("Y-m-d",$this->mySql2PhpTime($row->EndTime))>date("Y-m-d",$this->mySql2PhpTime($row->StartTime))?1:0), //more than one day event
                //$row->InstanceType,
                0,//Recurring event,
                $row->Color,
                1,//editable
                $row->Location,
                ''//$attends
            );
        }
        return $ret;
    }


    public function addTeamCalendar(Request $request){
        $ret = array();
        $db = new \App\jqcalendar();
        $userId = $request->user()->id;
        $db->user_id = $userId;
        $db->subject = $request->CalendarTitle;
        $db->starttime = $this->php2MySqlTime($this->js2PhpTime($request->CalendarStartTime));
        $db->endtime = $this->php2MySqlTime($this->js2PhpTime($request->CalendarEndTime));
        $db->isalldayevent = $request->IsAllDayEvent;
        $add = $db->save();
        if($add){
            $ret['IsSuccess'] = true;
            $ret['Msg'] = 'add success';
            $ret['Data'] = 'success';
        }else{
            $ret['IsSuccess'] = false;
            $ret['Msg'] = 'error';

        }
        return json_encode($ret);
    }

    public function addMatch(Request $request){

        $arrMembers=[];
        array_push($arrMembers,$request->user()->id);
        $team1 = \App\teams::where('id','=',$request->team1)->with('members')->first();
        array_push($arrMembers,$team1->manager_id);
        foreach($team1->members as $value){
            array_push($arrMembers,$value->user_id);
        }
        $team2 = \App\teams::where('id','=',$request->team2)->with('members')->first();
        array_push($arrMembers,$team2->manager_id);
        foreach($team2->members as $value){
            array_push($arrMembers,$value->user_id);
        }
        foreach($arrMembers as $val){
            $newMatch = new jqcalendar();
            $newMatch->subject    = $team1->name.' VS '.$team2->name;
            $newMatch->team1      = $request->team1;
            $newMatch->team2      = $request->team2;
            $newMatch->StartTime  = $request->startDate.' '.$request->startTime;
            $newMatch->EndTime    = $request->endDate.' '.$request->endTime;
            $newMatch->user_id    = $val;
            $newMatch->event_type = 1;
            $newMatch->Color      = 7;
            $newMatch->save();

        }

        return view('calendar.sample');
    }


    function js2PhpTime($jsdate){
        if(preg_match('@(\d+)/(\d+)/(\d+)\s+(\d+):(\d+)@', $jsdate, $matches)==1){
            $ret = mktime($matches[4], $matches[5], 0, $matches[1], $matches[2], $matches[3]);
            //echo $matches[4] ."-". $matches[5] ."-". 0  ."-". $matches[1] ."-". $matches[2] ."-". $matches[3];
        }else if(preg_match('@(\d+)/(\d+)/(\d+)@', $jsdate, $matches)==1){
            $ret = mktime(0, 0, 0, $matches[1], $matches[2], $matches[3]);
            //echo 0 ."-". 0 ."-". 0 ."-". $matches[1] ."-". $matches[2] ."-". $matches[3];
        }
        return $ret;
    }

    function php2JsTime($phpDate){
        //echo $phpDate;
        //return "/Date(" . $phpDate*1000 . ")/";
        return date("m/d/Y H:i", $phpDate);
    }

    function php2MySqlTime($phpDate){
        return date("Y-m-d H:i:s", $phpDate);
    }

    function mySql2PhpTime($sqlDate){
        $arr = date_parse($sqlDate);
        return mktime($arr["hour"],$arr["minute"],$arr["second"],$arr["month"],$arr["day"],$arr["year"]);

    }
}
