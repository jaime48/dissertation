<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
    <title>	My Calendar </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/calendar/dailog.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/calendar/calendar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/calendar/dp.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/calendar/alert.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/calendar/main.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/calendar/bootstrap-datepicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/calendar/jquery.timepicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
    

    
</head>
<body>
@include('navi');
@include('league.sidebar');
<script src="{{asset('js/calendar/Plugins/Common.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar/Plugins/datepicker_lang_US.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar/jquery.datepicker.js')}}" type="text/javascript"></script>

<script src="{{asset('js/calendar/Plugins/jquery.alert.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar/Plugins/jquery.ifrmdailog.js')}}" defer="defer" type="text/javascript"></script>
<script src="{{asset('js/calendar/Plugins/wdCalendar_lang_US.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar/Plugins/jquery.calendar.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar/sample.js')}}" type="text/javascript"></script>

<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('js/calendar/jquery.datepair.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar/jquery.timepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar/Datepair.js')}}" type="text/javascript"></script>
<div class="mainContent">
        <div id="calhead" style="padding-left:1px;padding-right:1px;">
            <div class="cHead"><div class="ftitle">My Calendar</div>
            <div id="loadingpannel" class="ptogtitle loadicon" style="display: none;">Loading data...</div>
             <div id="errorpannel" class="ptogtitle loaderror" style="display: none;">Sorry, could not load your data, please try again later</div>
            </div>          
            
            <div id="caltoolbar" class="ctoolbar">
              <div id="faddbtn" class="fbutton">
                <div><span title='Click to Create New Event' class="addcal">

                New Match
                </span></div>
            </div>
            <div class="btnseparator"></div>
             <div id="showtodaybtn" class="fbutton">
                <div><span title='Click to back to today ' class="showtoday">
                Today</span></div>
            </div>
              <div class="btnseparator"></div>

            <div id="showdaybtn" class="fbutton">
                <div><span title='Day' class="showdayview">Day</span></div>
            </div>
              <div  id="showweekbtn" class="fbutton fcurrent">
                <div><span title='Week' class="showweekview">Week</span></div>
            </div>
              <div  id="showmonthbtn" class="fbutton">
                <div><span title='Month' class="showmonthview">Month</span></div>

            </div>
            <div class="btnseparator"></div>
              <div  id="showreflashbtn" class="fbutton">
                <div><span title='Refresh view' class="showdayflash">Refresh</span></div>
                </div>
             <div class="btnseparator"></div>
            <div id="sfprevbtn" title="Prev"  class="fbutton">
              <span class="fprev"></span>

            </div>
            <div id="sfnextbtn" title="Next" class="fbutton">
                <span class="fnext"></span>
            </div>
            <div class="fshowdatep fbutton">
                    <div>
                        <input type="hidden" name="txtshow" id="hdtxtshow" />
                        <span id="txtdatetimeshow">Loading</span>

                    </div>
            </div>
            
            <div class="clear"></div>
            </div>
      </div>
      <div style="padding:1px;">

        <div class="t1 chromeColor">
            &nbsp;</div>
        <div class="t2 chromeColor">
            &nbsp;</div>
        <div id="dvCalMain" class="calmain printborder">
            <div id="gridcontainer" style="overflow-y: visible;">
            </div>
        </div>
        <div class="t2 chromeColor">

            &nbsp;</div>
        <div class="t1 chromeColor">
            &nbsp;
        </div>   
        </div>
     

 </div>
</body>
</html>
<div class="modal fade" id="edit-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="infocontainer">
                <form action="updateCalendarInfo" class="fform" id="fmEdit" method="post">
                    {{csrf_field()}}
                    <label>
            <span>                        *Subject:
            </span>
                        <div id="calendarcolor">
                        </div>
                        <input MaxLength="200" class="required safe" id="Subject" name="Subject" style="width:85%;" type="text" value="<?php echo isset($event)?$event->Subject:"" ?>" />
                        <input id="colorvalue" name="colorvalue" type="hidden" value="<?php echo isset($event)?$event->Color:"" ?>" />
                    </label>
                    <label>
            <span>*Time:
            </span>
                        <div>
                            <?php
                            $all_day_event=false;
                            if(isset($event)){
                                $sarr = explode(" ", php2JsTime(mySql2PhpTime($event->StartTime)));
                                $earr = explode(" ", php2JsTime(mySql2PhpTime($event->EndTime)));
                                $all_day_event=$event->IsAllDayEvent;
                            }
                            elseif(isset($_GET['start']) && $_GET['start']!=-360){
                                $sarr = explode(" ",$_GET['start']);
                                $earr = explode(" ",$_GET['end']);
                                $all_day_event=($sarr[1]=="00:00" && $earr[1]=="00:00");
                            }
                            ?>
                            <input MaxLength="30" class="required date" id="stpartdate" name="stpartdate" style="padding-left:2px;width:200px;" type="text" value="<?php echo isset($sarr[0])?$sarr[0]:""; ?>" />
                            To
                            <input MaxLength="30" class="required date" id="etpartdate" name="etpartdate" style="padding-left:2px;width:200px;" type="text" value="<?php echo isset($earr[0])?$earr[0]:""; ?>" />

                        </div>
                    </label>
                    <label>
            <span>                        Location:
            </span>
                        <input MaxLength="200" id="Location" name="Location" style="width:95%;" type="text" value="<?php echo isset($event)?$event->Location:""; ?>" />
                    </label>
                    <label>
            <span>                        Remark:
            </span>
<textarea cols="20" id="Description" name="Description" rows="2" style="width:95%; height:70px">
<?php echo isset($event)?$event->Description:""; ?>
</textarea>
                    </label>
                    <label>
            <span>
            </span>
                        <button type="submit" id="Savebtn" class="imgbtn" >
          <span class="Save"  title="Save the calendar">Save(<u>S</u>)
          </span>
                        </button>
                    </label>
                    <input id="calendarId" name="calendarId" type="hidden" value="" />
                    <input id="timezone" name="id" type="hidden" value="<?php echo isset($event)?$event->Id:""; ?>" />
                </form>
            </div>

        </div>
    </div>
</div>
{{--match modal--}}
<div class="modal fade" id="addMatch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="infocontainer">
                <form action="addMatch" class="fform" id="fmEdit" method="post">
                    {{csrf_field()}}
                    <label>
            <span>                        Teams:

            </span>
                        <select required MaxLength="30" class="" id="team1" name="team1" style="padding-left:2px;width:150px;" >
                            <option value="" disabled selected>Select your option</option>
                        </select>
                        VS
                        <select required MaxLength="30" class="" id="team2" name="team2" style="padding-left:2px;width:150px;">
                            <option value="" disabled selected>Select your option</option>
                        </select>
                    </label>
                    <label>
            <span>*Time:
            </span>
                        <div id="matchTime">

                            <input MaxLength="30" class="date start" id="startDate" name="startDate" style="padding-left:2px;width:100px;" type="text" required/>
                            <input MaxLength="30" class="time start" id="startTime" name="startTime" style="padding-left:2px;width:100px;" type="text"/>
                            To
                            <input MaxLength="30" class="time end" id="endTime" name="endTime" style="padding-left:2px;width:100px;" type="text"/>
                            <input MaxLength="30" class="date end" id="endDate" name="endDate" style="padding-left:2px;width:100px;" type="text"/>

                        </div>
                    </label>
                    <label>
            <span>                        Location:
            </span>
                        <input MaxLength="200" id="Location" name="Location" style="width:95%;" type="text" value="<?php echo isset($event)?$event->Location:""; ?>" />
                    </label>
                    <label>
            <span>                        Remark:
            </span>
<textarea cols="20" id="Description" name="Description" rows="2" style="width:95%; height:70px">
<?php echo isset($event)?$event->Description:""; ?>
</textarea>
                    </label>
                    <label>
            <span>
            </span>
                        <button type="submit" id="Savebtn" class="imgbtn" >
          <span class="Save"  title="Save the calendar">Save(<u>S</u>)
          </span>
                        </button>
                    </label>
                    <input id="calendarId" name="calendarId" type="hidden" value="" />
                    <input id="timezone" name="id" type="hidden" value="<?php echo isset($event)?$event->Id:""; ?>" />
                </form>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $('#matchTime .time').timepicker({
        'showDuration': true,
        'timeFormat': 'H:i:s'
    });

    $('#matchTime .date').datepicker({
        'format': 'yyyy-m-d',
        'autoclose': true
    });

    // initialize datepair
    var basicExampleEl = document.getElementById('matchTime');
    var datepair = new Datepair(basicExampleEl);

</script>

<style>
    #amendTh {
        width:30px
    }
</style>
