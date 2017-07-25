

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ProSports</title>


</head>
<body>
<link href="{{asset('css/calendar/bootstrap-datepicker.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/calendar/jquery.timepicker.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
@include('navi');
@include('team.sidebar');
<script src="{{asset('js/calendar/jquery.datepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('js/calendar/jquery.datepair.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar/jquery.timepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar/Datepair.js')}}" type="text/javascript"></script>

<link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/chosen.min.css')}}">
<script src="{{asset('js/chosen.jquery.min.js')}}"></script>

<div class="mainContent">
    <div class="container">
        <div class="row">
            <form class="form-horizontal" action="team.createTeamSubmit" method="post" enctype="multipart/form-data">
                <fieldset>
                {{ csrf_field() }}
                    <!-- Form Name -->
                    <legend>Team Registration</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Name">Team Name</label>
                        <div class="col-md-3">
                            <input id="teamName" name="teamName" type="text" placeholder="team name" class="form-control input-md" required="">

                        </div>
                        <label class="col-md-2 control-label" for="Name">Sports Type</label>
                        <div class="col-md-3">
                            <select id="sportsType" name="sportsType" class="selectpicker" required>
                                <option value="" disabled selected="selected" hidden>Please select...</option>
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
                        <label class="col-md-2 control-label" for="passwordinput">Register Time</label>
                        <div class="col-md-3">
                            <div id="datetimepicker" class="input-append date">

                                <input type="text" id="startTime" name="startTime" class="form-control input-md" >

                                <span class="add-on" id="calendarIcon">
                                <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                </span>

                            </div>

                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Email</label>
                        <div class="col-md-3">
                            <input id="Email" name="Email" type="text" placeholder="Email" class="form-control input-md" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" ,data-minLength="5",
                                   data-error="some error", title="Please enter a valid Email address" required="">

                        </div>
                        <label class="col-md-2 control-label">Contact</label>
                        <div class="col-md-3">
                            <input id="contact" name="contact" type="text" placeholder="phone number" class="form-control input-md" pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$" required="">

                        </div>

                    </div>
                    <!-- Textarea -->
                    <div class="form-group">

                        <label class="col-md-2 control-label">Upload File</label>
                        <div class="col-md-3">
                            <input type="file" name="fileToUpload" id="fileToUpload" required>
                        </div>
                        <label class="col-md-2 control-label">Remarks</label>
                        <div class="col-md-3">
                            <textarea class="form-control" id="remarks" name="remarks"></textarea>
                        </div>


                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="submit">Team Logo</label>
                        <div class="col-md-4">
                            <div class="main-img-preview">
                                <img class="thumbnail img-preview" src="" title="Preview Logo" style="width:100px;height:100px">
                            </div>
                            <div class="input-group">
                                <input id="UploadLogo" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
                                <div class="input-group-btn">
                                    <div class="fileUpload btn btn-danger fake-shadow">
                                        <span><i class="glyphicon glyphicon-upload"></i> Upload Logo</span>
                                        <input id="logo-id" name="logo" type="file" class="attachment_upload" required>
                                    </div>
                                </div>
                            </div>
                            <p class="help-block">* Upload your team logo.</p>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="submit"></label>

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
</html>
@include('footer')
<style>
    body {
        font: 12px 'Open Sans';
    }
    .form-control, .thumbnail {
        border-radius: 2px;
    }
    .btn-danger {
        background-color: #B73333;
    }

    /* File Upload */
    .fake-shadow {
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }
    .fileUpload {
        position: relative;
        overflow: hidden;
    }
    .fileUpload #logo-id {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 33px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
    .img-preview {
        max-width: 100%;
    }
</style>
<script type="text/javascript">
    $('#sportsType').chosen({width:"100%"});

    $('#startTime').datepicker({
        'format': 'yyyy-m-d',
        'autoclose': true
    });

    $(document).ready(function() {
        var brand = document.getElementById('logo-id');
        brand.className = 'attachment_upload';
        brand.onchange = function() {
            document.getElementById('UploadLogo').value = this.value.substring(12);
        };

        // Source: http://stackoverflow.com/a/4459419/6396981
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#logo-id").change(function() {
            readURL(this);
        });
    });


</script>