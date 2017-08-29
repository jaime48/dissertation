<link href="{{asset('css/social/fileinput.min.css')}}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{asset('css/round-about.css')}}" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Round About - Start Bootstrap Template</title>



    <![endif]-->

</head>

<body>

<!-----------------------navigation--------------------------->
@include('navi')
@include('social.sidebar')
<script src="{{asset('js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('js/social/fileinput.min.js')}}"></script>
<script src="{{asset('js/social/plugins/piexif.js')}}"></script>
<script src="{{asset('js/social/plugins/sortable.js')}}"></script>

<!------------------------------------------------------------>
<div class="container" style="margin-top:20px;margin-left:300px;min-height:500px;">
    <div class="col-lg-12 col-sm-12 col-md-offset-1">
        <div class="card hovercard">
            <div class="card-background">
                <img class="card-bkimg" alt="" src="{{asset('images/allianz.jpg')}}">
                <!-- http://lorempixel.com/850/280/people/9/ -->
            </div>

            <div class="useravatar">

                <a id="avatar_link" href="#"><img alt="" src="{{asset('images/avatar/'.$info->avatar)}}"></a>​

            </div>
            <div class="card-info"> <span class="card-title">@if(isset($info->user))
                        {{$info->user->first_name.' '.$info->user->last_name}}
                    @else
                        {{$info->user_name}}
                    @endif</span>
            </div>

        </div>
        <form id="avatar_upload" method="post" action="info.avatarUpload" enctype="multipart/form-data">
            <input type="file" id="file_upload" style="display:none">
            <button type="submit" style="display:none" id="avatar_submit"></button>
        </form>

        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <div class="hidden-xs">Info</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <div class="hidden-xs">Friends</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="fa fa-users fa-lg" aria-hidden="true"></span>
                    <div class="hidden-xs">Groups</div>
                </button>
            </div>
        </div>

        <div class="well">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                    <h2>Personal Info</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th align="right" style="width:30%">Bio</th>
                                    <td align="left">
                                        {{$info->bio}}

                                    </td>

                                </tr>
                                <tr>
                                    <th align="left">Phone</th>
                                    <td align="left">
                                        {{$info->phone}}

                                    </td>

                                </tr>
                                <tr>
                                    <th align="right">Email</th>
                                    <td align="left">
                                        {{$info->email}}

                                    </td>

                                </tr>
                                <tr>
                                    <th align="right">Address</th>
                                    <td align="left">
                                        {{$info->address}}

                                    </td>

                                </tr>
                                <tr>
                                    <th align="right">Hobby</th>
                                    <td align="left">
                                        {{$info->hobby}}

                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="tab2">
                    <h2>Personal Info</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th align="right" style="width:30%">Bio</th>
                                    <td align="left">
                                        {{$info->bio}}

                                    </td>

                                </tr>
                                <tr>
                                    <th align="left">Phone</th>
                                    <td align="left">
                                        {{$info->phone}}

                                    </td>

                                </tr>
                                <tr>
                                    <th align="right">Email</th>
                                    <td align="left">
                                        {{$info->email}}

                                    </td>

                                </tr>
                                <tr>
                                    <th align="right">Address</th>
                                    <td align="left">
                                        {{$info->address}}

                                    </td>

                                </tr>
                                <tr>
                                    <th align="right">Hobby</th>
                                    <td align="left">
                                        {{$info->hobby}}

                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="tab3">
                    <h3>This is tab 3</h3>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="editAvatar" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload Avatar</h4>
            </div>
            <form name="uploadAvatar" method="post" action="info.uploadAvatar" enctype="multipart/form-data">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <p>Choose the image</p>
                    <input type="file" name="avatar">
                    &nbsp

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>
</body>
</html>
<!-----------------------footer--------------------------->
@include('footer')
<!------------------------------------------------------------>

<style>

    /* USER PROFILE PAGE */
    .card {
        margin-top: 20px;
        padding: 30px;
        background-color: rgba(214, 224, 226, 0.2);
        -webkit-border-top-left-radius:5px;
        -moz-border-top-left-radius:5px;
        border-top-left-radius:5px;
        -webkit-border-top-right-radius:5px;
        -moz-border-top-right-radius:5px;
        border-top-right-radius:5px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .card.hovercard {
        position: relative;
        padding-top: 0;
        overflow: hidden;
        text-align: center;
        background-color: #fff;
        background-color: rgba(255, 255, 255, 1);
    }
    .card.hovercard .card-background {
        height: 130px;
    }
    .card-background img {
        -webkit-filter: blur(25px);
        -moz-filter: blur(25px);
        -o-filter: blur(25px);
        -ms-filter: blur(25px);
        filter: blur(25px);
        margin-left: -100px;
        margin-top: -200px;
        min-width: 130%;
    }
    .card.hovercard .useravatar {
        position: absolute;
        top: 15px;
        left: 0;
        right: 0;
    }
    .card.hovercard .useravatar img {
        width: 100px;
        height: 100px;
        max-width: 100px;
        max-height: 100px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        border: 5px solid rgba(255, 255, 255, 0.5);
    }
    .card.hovercard .card-info {
        position: absolute;
        bottom: 14px;
        left: 0;
        right: 0;
    }
    .card.hovercard .card-info .card-title {
        padding:0 5px;
        font-size: 20px;
        line-height: 1;
        color: #262626;
        background-color: rgba(255, 255, 255, 0.1);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }
    .card.hovercard .card-info {
        overflow: hidden;
        font-size: 12px;
        line-height: 20px;
        color: #737373;
        text-overflow: ellipsis;
    }
    .card.hovercard .bottom {
        padding: 0 20px;
        margin-bottom: 17px;
    }
    .btn-pref .btn {
        -webkit-border-radius:0 !important;
    }

    a { cursor: pointer; }
</style>


<script>

    $(document).ready(function() {
        $("#avatar_link").click(function(){
            $('#editAvatar').modal('show');
        });
    });




</script>








