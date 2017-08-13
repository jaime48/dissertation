<script src="{{asset('js/jquery.js')}}"></script>
<!-- Custom CSS -->
<link href="{{asset('css/round-about.css')}}" rel="stylesheet">
<link href="{{asset('css/social/posts.css')}}" rel="stylesheet">
<script src="{{asset('js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('js/charts/Chart.bundle.min.js')}}"></script>
<script src="{{asset('js/charts/Chart.min.js')}}"></script>
<script src="{{asset('js/social/posts.js')}}"></script>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Social</title>

</head>

<body>

<!-----------------------navigation--------------------------->
@include('navi')
@include('social.sidebar')

<!------------------------------------------------------------>
<div class="mainContent">
    <div style="position: fixed; top: 0; right: 0; width: 200px; height: 500px;">
        <div class="well sidebar-nav" style="width:200px; margin-top:100px">
            <ul class="nav">
                <li>Friends</li>
                @foreach($posts->connections as $val)
                    <li class="active">
                        <a class="dropdown-toggle" data-toggle="dropdown">{{$val->users->first_name.' '.$val->users->last_name}}
                            <span hidden="hidden">{{$val->users->id}}</span>
                        </a>
                        <ul class="dropdown-menu comment-dropdown" role="menu" aria-labelledby="dLabel">
                            <li><a href="javascript:sendMessage()">Send message</a></li>
                            <li><a>Unfriend</a></li>
                            <li><a>123</a></li>
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="posts" align="left" style="margin-top:100px;margin-left:150px;">

        @foreach($posts as $val)
            <div class="well shadow" align="center" style="width:800px;"><div class="media">
                    @if($val->type==0)
                        <a class="pull-left" href="#"><img class="media-object" src="{{asset('posts/'.$val->url)}}" style="width:350px;height:200px"></a>

                    @else
                        <a class="pull-left" href="#"><video width="350" height="200" controls>
                                <source src="{{asset('posts/'.$val->url)}}"  type="video/mp4">

                                Your browser does not support the video tag.
                            </video></a>

                    @endif

                    <div class="media-body">
                        <h4 class="media-heading">{{$val->title}}</h4>
                        <p class="text-right">by {{$val->users->first_name}}&nbsp; {{$val->users->last_name}}</p>
                        <p style="min-height: 100px" align="left">{{$val->text}}</p>
                        <ul class="list-inline list-unstyled">
                            <li><span><i class="glyphicon glyphicon-calendar"></i>{{$val->created_at}} </span></li>
                            <li>|</li>
            <span><i class="glyphicon glyphicon-comment"></i>
             <a class="dropdown-toggle" data-toggle="dropdown" >
             <input class="hidden_input_id" hidden="hidden" value="{{$val->id}}">
             <span>{{$val->comments_num}}</span> comments</a>
                <ul class="dropdown-menu comment-dropdown" role="menu" aria-labelledby="dLabel" style="width:400px; position:relative;">

                        <div class="notification-heading">
                        <h4 class="menu-title">Comments</h4>
                        </div>
                        <li class="divider"></li>
                        <div class="notifications-wrapper">


                        </div>
                        <li class="divider"></li>
                        <div class="notification-footer"><h4 class="menu-title">Write Comment</h4>&nbsp;&nbsp;
                        <textarea style="width:200px;height:50px"></textarea>&nbsp;<a id="submitComment">post</a>
                        </div>
                    </ul>
             </span>
                            <li>|</li>
                            <li>
                                <a class="likeOrDislike"><i class="glyphicon glyphicon-thumbs-up"></i>&nbsp;<span>{{$val->like}}</span></a>&nbsp;
                                <a class="likeOrDislike"><i class="glyphicon glyphicon-thumbs-down"></i>&nbsp;<span>{{$val->dislike}}</span></a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
</div>
</body>
</html>


<!-- Modal -->
<div class="modal fade" id="sendMessage" role="dialog" data-backdrop="false">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Send Message</h4>
            </div>
            <form name="addTeam" method="post" action="addTeam">
                <div class="modal-body">

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>

                </div>
            </form>
        </div>

    </div>
</div>
<!-----------------------footer--------------------------->
@include('footer')
<!------------------------------------------------------------>



<style>
    .modal.in .modal-dialog {
        position:fixed;
        bottom:0px;
        right:100px;
        margin:0px;
        width:300px;
        height:400px

    }
    .modal-content {
        height:400px
    }

</style>