$(document).ready(function() {
    var view="week";

    var DATA_FEED_URL = "php/datafeed.php";
    var op = {
        view: view,
        theme:3,
        showday: new Date(),
        EditCmdhandler:Edit,
        DeleteCmdhandler:Delete,
        ViewCmdhandler:View,
        onWeekOrMonthToDay:wtd,
        onBeforeRequestData: cal_beforerequest,
        onAfterRequestData: cal_afterrequest,
        onRequestDataError: cal_onerror,
        autoload:true,
        url: "getCalendarList",
        quickAddUrl: "team.addTeamCalendar",
        quickUpdateUrl: "updateTeamCalendar",
        quickDeleteUrl: "deleteTeamCalendar"
    };
    var $dv = $("#calhead");
    var _MH = document.documentElement.clientHeight;
    var dvH = $dv.height() + 2;
    op.height = _MH - dvH;
    op.eventItems =[];

    var p = $("#gridcontainer").bcalendar(op).BcalGetOp();



    $("#hdtxtshow").datepicker({ picker: "#txtdatetimeshow", showtarget: $("#txtdatetimeshow"),
//            onReturn:function(r){
//                            var p = $("#gridcontainer").gotoDate(r).BcalGetOp();
//                            if (p && p.datestrshow) {
//                                $("#txtdatetimeshow").text(p.datestrshow);
//                            }
//                     }
    });
    function cal_beforerequest(type)
    {
        var t="Loading data...";
        switch(type)
        {
            case 1:
                t="Loading data...";
                break;
            case 2:
            case 3:
            case 4:
                t="The request is being processed ...";
                break;
        }
        $("#errorpannel").hide();
        $("#loadingpannel").html(t).show();
    }
    function cal_afterrequest(type)
    {
        switch(type)
        {
            case 1:
                $("#loadingpannel").hide();
                break;
            case 2:
            case 3:
            case 4:
                $("#loadingpannel").html("Success!");
                window.setTimeout(function(){ $("#loadingpannel").hide();},2000);
                break;
        }

    }
    function cal_onerror(type,data)
    {
        $("#errorpannel").show();
    }
    function Edit(data)
    {

        $.ajax({
            method:"GET",
            url: "editCalendar",
            data:{id:data[0]}
        }).done(function(msg){
            $('#Subject').val(msg.Subject);
            $('#Subject').val(msg.Subject);
            $('#stpartdate').val(msg.StartTime);
            $('#Location').val(msg.Location);
            $('#etpartdate').val(msg.EndTime);
            $('#Description').val(msg.Description);
            $('#calendarId').val(data[0]);
            if(msg.event_type==1){
                document.getElementById("Subject").disabled = true;
                document.getElementById("stpartdate").disabled = true;
                document.getElementById("etpartdate").disabled = true;
                document.getElementById("Location").disabled = true;
                document.getElementById("Description").disabled = true;
            }else{
                document.getElementById("Subject").disabled = false;
                document.getElementById("stpartdate").disabled = false;
                document.getElementById("etpartdate").disabled = false;
                document.getElementById("Location").disabled = false;
                document.getElementById("Description").disabled = false;
                $('#Savebtn').show();
            }
        });

        $('#edit-form').modal('show');

    }
    function View(data)
    {
        var str = "";
        $.each(data, function(i, item){
            str += "[" + i + "]: " + item + "\n";
        });
        alert(str);
    }
    function Delete(data,callback)
    {
        console.log(data);
        if(data[7]==7){
            alert('not allowed');return;
        }
        $.alerts.okButton="Ok";
        $.alerts.cancelButton="Cancel";
        hiConfirm("Are You Sure to Delete this Event", 'Confirm',function(r){ r && callback(0);});
    }
    function wtd(p)
    {
        if (p && p.datestrshow) {
            $("#txtdatetimeshow").text(p.datestrshow);
        }
        $("#caltoolbar div.fcurrent").each(function() {
            $(this).removeClass("fcurrent");
        })
        $("#showdaybtn").addClass("fcurrent");
    }
    //to show day view
    $("#showdaybtn").click(function(e) {
        //document.location.href="#day";
        $("#caltoolbar div.fcurrent").each(function() {
            $(this).removeClass("fcurrent");
        })
        $(this).addClass("fcurrent");
        var p = $("#gridcontainer").swtichView("day").BcalGetOp();
        if (p && p.datestrshow) {
            $("#txtdatetimeshow").text(p.datestrshow);
        }
    });
    //to show week view
    $("#showweekbtn").click(function(e) {
        //document.location.href="#week";
        $("#caltoolbar div.fcurrent").each(function() {
            $(this).removeClass("fcurrent");
        })
        $(this).addClass("fcurrent");
        var p = $("#gridcontainer").swtichView("week").BcalGetOp();
        if (p && p.datestrshow) {
            $("#txtdatetimeshow").text(p.datestrshow);
        }

    });
    //to show month view
    $("#showmonthbtn").click(function(e) {
        //document.location.href="#month";
        $("#caltoolbar div.fcurrent").each(function() {
            $(this).removeClass("fcurrent");
        })
        $(this).addClass("fcurrent");
        var p = $("#gridcontainer").swtichView("month").BcalGetOp();
        if (p && p.datestrshow) {
            $("#txtdatetimeshow").text(p.datestrshow);
        }
    });

    $("#showreflashbtn").click(function(e){
        $("#gridcontainer").reload();
    });

    //Add a match
    $("#faddbtn").click(function(e) {
        $.ajax({
            url:"fetchTeams",
            method:"get"
        }).done(function(msg){
            $('#team1').find('option:not(:disabled)').remove();
            $('#team2').find('option:not(:disabled)').remove();
            // console.log(msg);
            $.each(msg,function(key,value){
                console.log(value);
                $('#team1').append(new Option(value.name,value.id));
                // $('#team2').append(new Option(value.name,value.id));
            });
        });
        $('#addMatch').modal('show');
    });
    $('#team1').change(function(){
        var val = $(this).val();
        $('#team2').find('option').remove();
        var options = $('#team1 option[value!='+val+']').sort().clone();
        console.log(options);
        $('#team2').append(options);
    });
    //go to today
    $("#showtodaybtn").click(function(e) {
        var p = $("#gridcontainer").gotoDate().BcalGetOp();
        if (p && p.datestrshow) {
            $("#txtdatetimeshow").text(p.datestrshow);
        }


    });
    //previous date range
    $("#sfprevbtn").click(function(e) {
        var p = $("#gridcontainer").previousRange().BcalGetOp();
        if (p && p.datestrshow) {
            $("#txtdatetimeshow").text(p.datestrshow);
        }

    });
    //next date range
    $("#sfnextbtn").click(function(e) {
        var p = $("#gridcontainer").nextRange().BcalGetOp();
        if (p && p.datestrshow) {
            $("#txtdatetimeshow").text(p.datestrshow);
        }
    });

});