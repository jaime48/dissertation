<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
@include('navi');
@include('league.sidebar');

<link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
{{--<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<div class="mainContent">

    <div class="container">
        <div class="row">
            <form class="form-horizontal" action="createLeagueSubmit" method="post" enctype="multipart/form-data">
                <fieldset>
                {{ csrf_field() }}
                    <!-- Form Name -->
                    <legend>League Registration</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Name">League Name</label>
                        <div class="col-md-3">
                            <input id="leagueName" name="leagueName" type="text" placeholder="league name" class="form-control input-md" required="">

                        </div>
                        <label class="col-md-2 control-label" for="Name">sports type</label>
                        <div class="col-md-3">
                            <select id="sportsType" name="sportsType" required>
                                <option value="" disabled selected="selected" hidden>Select something...</option>
                                <option value="1">football</option>
                                <option value="2">basketball</option>
                                <option value="3">baseball</option>
                                <option value="4">ice hockey</option>

                            </select>

                        </div>

                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Name">Registered Region</label>
                        <div class="col-md-3">
                            <input id="registeredRegion" name="registeredRegion" type="text" placeholder="registered region" class="form-control input-md" required="">

                        </div>
                        <label class="col-md-2 control-label" for="passwordinput">Start Time</label>
                        <div class="col-md-3">
                            <div id="datetimepicker" class="input-append date">

                                <input type="text" id="startTime" name="startTime" class="form-control input-md" >

                                <span class="add-on" id="calendarIcon">
                                <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                </span>

                            </div>

                        </div>

                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="passwordinput">End Time</label>
                        <div class="col-md-3">
                            <div id="datetimepicker1" class="input-append date">

                                <input type="text" id="endTime" name="endTime" class="form-control input-md" >

                                <span class="add-on" id="calendarIcon">
                                <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                </span>

                            </div>

                        </div>
                        <label class="col-md-2 control-label">Contact</label>
                        <div class="col-md-3">
                            <input id="contact" name="contact" type="text" placeholder="phone number" class="form-control input-md" required="">

                        </div>

                    </div>
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-2 control-label">Email</label>
                        <div class="col-md-3">
                            <input id="Email" name="Email" type="text" placeholder="Email" class="form-control input-md" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" ,data-minLength="5",
                                   data-error="some error", title="Please enter a valid Email address" required="">

                        </div>
                        <label class="col-md-2 control-label">Upload File</label>
                        <div class="col-md-3">
                            <input type="file" name="fileToUpload" id="fileToUpload">

                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Remarks</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="remarks" name="remarks"></textarea>
                        </div>

                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>


</div>



</body>
<html>
@include('footer')
<style>
    #leagueName,#calendarIcon,#startTime,#endTime,#registeredRegion ,#contact,#Email{
        height:30px
    }
    #startTime,#endTime {
        width:246px
    }
    #sportsType {
        width:273px
    }
</style>
<script type="text/javascript">
    $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'en'
    });
    $('#datetimepicker1').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'en'
    });
</script>