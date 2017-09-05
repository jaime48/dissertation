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
<script src="{{asset('js/social/home.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/chosen.min.css')}}">
<script src="{{asset('js/chosen.jquery.min.js')}}"></script>
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
                                        <div hidden="hidden" id="new_first_name" style="align-content: center">
                                            <div class="form-group">
                                                Bio<input name="bio" class="changePassword"><br>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm save" >Save <span class="glyphicon glyphicon-send"></span></button>
                                            <button type="button" class="btn btn-save btn-sm cancel" >Cancel <span class="glyphicon glyphicon-warning"></span></button>
                                        </div>
                                    </td>
                                    <td align="left" width="30%"> <a class="edit ml10" title="Edit">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        </a></td>
                                </tr>
                                <tr>
                                    <th align="left">Phone</th>
                                    <td align="left">
                                        {{$info->phone}}
                                        <div hidden="hidden" id="new_first_name" style="align-content: center">
                                            <div class="form-group">
                                                Phone<input name="phone" class="changePassword"><br>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm save" >Save <span class="glyphicon glyphicon-send"></span></button>
                                            <button type="button" class="btn btn-save btn-sm cancel" >Cancel <span class="glyphicon glyphicon-warning"></span></button>
                                        </div>
                                    </td>
                                    <td align="left" width="30%"> <a class="edit ml10" title="Edit">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        </a></td>
                                </tr>
                                <tr>
                                    <th align="right">Email</th>
                                    <td align="left">
                                        {{$info->email}}
                                        <div hidden="hidden" id="new_email" style="align-content: center">
                                            <div class="form-group">
                                                Email<input name="email" class="changePassword"><br>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm save" >Save <span class="glyphicon glyphicon-send"></span></button>
                                            <button type="button" class="btn btn-save btn-sm cancel" >Cancel <span class="glyphicon glyphicon-warning"></span></button>
                                        </div>
                                    </td>
                                    <td align="left" width="30%"> <a class="edit ml10" title="Edit">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        </a></td>
                                </tr>
                                <tr>
                                    <th align="right">Address</th>
                                    <td align="left">
                                        {{$info->address}}
                                        <div hidden="hidden" id="new_first_name" style="align-content: center">
                                            <div class="form-group">
                                                Address<input name="address" class="changePassword"><br>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm save" >Save <span class="glyphicon glyphicon-send"></span></button>
                                            <button type="button" class="btn btn-save btn-sm cancel" >Cancel <span class="glyphicon glyphicon-warning"></span></button>
                                        </div>
                                    </td>
                                    <td align="left" width="30%"> <a class="edit ml10" title="Edit">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        </a></td>
                                </tr>
                                <tr>
                                    <th align="right">Hobby</th>
                                    <td align="left">
                                        {{$info->hobby}}
                                        <div hidden="hidden" id="new_first_name" style="align-content: center">
                                            <div class="form-group">
                                                Hobby<input name="hobby" class="changePassword"><br>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm save" >Save <span class="glyphicon glyphicon-send"></span></button>
                                            <button type="button" class="btn btn-save btn-sm cancel" >Cancel <span class="glyphicon glyphicon-warning"></span></button>
                                        </div>
                                    </td>
                                    <td align="left" width="30%"> <a class="edit ml10" title="Edit">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        </a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>







                <div class="tab-pane fade in" id="tab2">

                    <div class="row">
                        <div class="col-md-6">
                            <table class="table">
                                <tbody>
                                @if(!empty($connections))
                                @foreach($connections as $cons)
                                    <tr>
                                        <th align="right" style="width:30%">
                                            <img alt="" src="{{asset('images/avatar/'.$cons->info->avatar)}}" style=" width: 40px;height: 40px;border-radius: 50%">
                                        </th>
                                        <td align="left" style="width:30%;font-size: 14px; padding:20px">
                                            {{$cons->users->first_name.' '.$cons->users->last_name}}

                                        </td>
                                        <td align="center" style="width:30%;font-size: 14px; padding:20px" >
                                            <span hidden="hidden">{{$cons->users->id}}</span>
                                            <a class="edit ml10 seeProfile" title="view profile">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </a>&nbsp;
                                            <a class="edit ml10" title="send message">
                                                <i class="glyphicon glyphicon-envelope"></i>
                                            </a>&nbsp;
                                            <a class="edit ml10 unfriend" title="unfriend">
                                                <i class="glyphicon glyphicon-trash"></i>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
@endif

                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6" >
                            <p>Add a friend</p>
                            <form id="friendsRequest" action="#">
                                <select multiple id="addFriends" name="addFriends[]" class="selectpicker">

                                </select>
                                <button type="button" class="btn btn-sm btn-primary" id="addFriendsRequest">send request</button>
                            </form>



                        </div>
                    </div>
                </div>



                <div class="tab-pane fade in" id="tab3">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table">
                                <tbody>
                                @if(!empty($connections))

                                    @foreach($groups as $cons)
                                        <tr>

                                            <td align="left" style="width:30%;font-size: 14px; padding:20px">
                                                {{$cons->name}}

                                            </td>
                                            <td align="center" style="width:30%;font-size: 14px; padding:20px" >
                                                <span hidden="hidden">{{$cons->id}}</span>
                                                <a class="edit ml10 seeMembers" title="view members">
                                                    <i class="glyphicon glyphicon-user"></i>
                                                </a>&nbsp;
                                                <a class="edit ml10" title="send message">
                                                    <i class="glyphicon glyphicon-envelope"></i>
                                                </a>&nbsp;
                                                <a class="edit ml10 unfriend" title="unfriend">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    @endif



                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6" >
                            <p>Create a group</p>
                            <form id="createGroupForm" action="createGroup" method="post">
                            <table>
                                {{csrf_field()}}
                                <tr>
                                    <td>Name</td>
                                    <td style="padding-bottom:10px"> <input type="text" name="name" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Add member</td>
                                    <td> <select multiple id="members_id" name="members_id[]" class="selectpicker">

                                        </select>
                                    </td>
                                    <td>&nbsp;<button type="submit" class="btn-sm btn-success" id="createGroup" >Create</button></td>
                                </tr>
                            </table>
                            </form>

                            </div>

                        </div>
                    </div>
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


<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog resize">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Unfriend</h4>
            </div>

            <div class="modal-body">Are you sure to unfriend this person ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="confirmDelete">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div>

    </div>
</div>

<div id="MemberInfoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <form name="editMember" action='team.editMemberInfo' method="POST">
            <div class="modal-content">
                {{csrf_field()}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">
                        <i class="glyphicon glyphicon-user"></i> Group Members
                    </h4>
                </div>

                <div class="modal-body">
                    <div id="dynamic-content"> <!-- mysql data will load in table -->

                        <div class="row">
                            <div class="col-md-12">

                                <div class="table-responsive">

                                    <table class="table table-striped table-bordered">
                                        <ul class="list-group-members" style="list-style-type: none">

                                        </ul>

                                    </table>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" aria-hidden="true">submit</button>
                </div>

            </div>
        </form>
    </div>
</div>
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

    $(document).on('click','.save', function(e){

        var name = $(e.target).prevAll('div').find('input').attr('name');
        var value = $(e.target).prevAll('div').find('input').val();
        $.ajax({
            method:'GET',
            url:'social.editInfo',
            data:{'data':{name,value}}
        }).done(function(msg){
            if(msg==1){
                location.reload();
            }else{
                alert('something is wrong !!!');
            }
        });
    });


    $.ajax({
        method:'GET',
        url:'addableFriends'
    }).done(function(msg){

        $.each(msg, function(key, value) {
            $('#addFriends').append(new Option(value.first_name+' '+value.last_name, value.id));
        });
        $('#addFriends').chosen({width:"50%"});
    });

    $.ajax({
        method:'GET',
        url:'getFriends'
    }).done(function(msg){
        $.each(msg, function(key, value) {
            $('#members_id').append(new Option(value.users.first_name+' '+value.users.last_name, value.users.id));
        });
        $('#members_id').chosen({width:"100%"});
    });

    $(document).on('click','#addFriendsRequest',function(){
        var arr=[];
        $.each($('#friendsRequest').serializeArray(),function(key,value){
            arr.push({'to_id':value.value});
        });
        if(arr.length==0){return}
        $.ajax({
            url:'friendsRequest',
            method:'GET',
            data:{'ids':arr}

        }).done(function(msg){

        });


    });

$(document).on('click','.seeMembers',function(e){
    $group_id = $(e.target).parent().prev('span').text();
    $.ajax({
        url:'getGroupMembers',
        method:'GET',
        data:{'group_id':$group_id}
    }).done(function(data){
        $path = '{{asset('images/avatar/')}}';
        console.log(data);
        $('.list-group-members').empty();
        $.each(data,function(key,value){
            $('.list-group-members').append(
                    '<li class=list-group-item">'+
                    '<div class="col-md-12" ><div class="col-md-2" >' +
                    '<img alt="" src="'+$path+'/'+value.info.avatar+'" style=" width: 40px;height: 40px;border-radius: 50%"></div>' +
                    '<div class="col-md-4" style="padding:10px" >'+value.first_name+' '+value.last_name+'</div>' +
                    '</div> ' +
                    '</li>'
            );
        });

    });
    $('#MemberInfoModal').modal('show');
});


</script>








