<script src="{{asset('js/jquery.js')}}"></script>
<!-- Custom CSS -->
<link href="{{asset('css/round-about.css')}}" rel="stylesheet">
{{--<link href="{{asset('css/social/posts.css')}}" rel="stylesheet">--}}
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

    <title>Round About - Start Bootstrap Template</title>



    <![endif]-->

</head>

<body>

<!-----------------------navigation--------------------------->
@include('navi')
@include('social.sidebar')

<!------------------------------------------------------------>
<div class="mainContent">
    <div style="position: fixed; top: 0; right: 0; width: 200px; height: 500px;">

        <div class="well sidebar-nav" style="width:200px">
            <ul class="nav">
                <li>Right Sidebar</li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li>Sidebar</li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
        </div>
        <!--/.well -->


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
                <ul class="dropdown-menu comment-dropdown" role="menu" aria-labelledby="dLabel" style="width:400px">

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
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
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
<!-----------------------footer--------------------------->
@include('footer')
<!------------------------------------------------------------>
<style>
    .img-circle {
        width: 200px;
        height: 200px;
    }
    .comment-dropdown{
        position:relative;
    }
    .shadow{

        background-color: #FFFFFF;
        padding:10px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius:4px;
        box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.3);
    }
    .shadow:hover{
        box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 6px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
        color:black;
    }
</style>

<script>


</script>