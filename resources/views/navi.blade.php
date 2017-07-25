
<!------------------------------->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/navi.js')}}"></script>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<!--open this will disable navbar-collapse, problem unsolved--->
{{--<script src="{{asset('js/bootstrap.js')}}"></script>--}}
<!------------------------------->

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{asset('/')}}">ProSports</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right" id="ul">
                <li>
                    <a  href="about" id="about">About</a>
                </li>
                <li>
                    <a href="#" id="questionnaire" onclick="questionnaire()">questionnaire</a>
                </li>

                <li>
                    <button class="btn btn-default btn-lg btn-link dropdown-toggle" data-toggle="dropdown" style="font-size:20px;margin-top:8px;margin-left:20px" id="">
                        <span class="glyphicon glyphicon-comment"></span>
                    </button><span id=""></span>
                    <ul class="dropdown-menu notifications" role="menu" aria-labelledby="dLabel" id="" style="width:400px">

                        <div class="notification-heading"><h4 class="menu-title">Notifications</h4><a href='#' onclick="setAllRead()"><h4 class="menu-title pull-right">Set all as read<i class="glyphicon glyphicon-circle-arrow-right"></i></h4></a>
                        </div>
                        <li class="divider"></li>
                        <div class="">


                        </div>
                        <li class="divider"></li>
                        <div class="notification-footer"><h4 class="menu-title">View all<i class="glyphicon glyphicon-circle-arrow-right"></i></h4></div>
                    </ul>

                </li>
                <li>
                    <button class="btn btn-default btn-lg btn-link dropdown-toggle" data-toggle="dropdown" style="font-size:20px;margin-top:10px;margin-left:20px" id="notiButton">
                        <span class="glyphicon glyphicon-bell"></span>
                    </button><span id="notiIcon"></span>
                    <ul class="dropdown-menu notifications" role="menu" aria-labelledby="dLabel" id="notiDropDown" style="width:400px">

                        <div class="notification-heading"><h4 class="menu-title">Notifications</h4><a href='#' onclick="setAllRead()"><h4 class="menu-title pull-right">Set all as read<i class="glyphicon glyphicon-circle-arrow-right"></i></h4></a>
                        </div>
                        <li class="divider"></li>
                        <div class="notifications-wrapper" id='notiWrapper'>


                        </div>
                        <li class="divider"></li>
                        <div class="notification-footer"><h4 class="menu-title">View all<i class="glyphicon glyphicon-circle-arrow-right"></i></h4></div>
                    </ul>

                </li>
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li>--}}
                            {{--<a href="#">1 Column Portfolio</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">2 Column Portfolio</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">3 Column Portfolio</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">4 Column Portfolio</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Single Portfolio Item</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li>--}}
                            {{--<a href="#">Blog Home 1</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Blog Home 2</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Blog Post</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

@include('loginform')

<div id="questionnaireAlert" class="modal fade" role="dialog">

    <div class="modal-dialog resize">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Alert</h4>
            </div>
            <div class="alert alert-danger" role="alert">
                <div class="modal-body">You have already taken the survey!
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>


        </div>

    </div>
</div>

<style>
    #badge-notify{
        background:red;
        position:relative;
        top: -0px;
        left: -25px;
        width:17px;
        height:17px;
        font-size: 11px;
    }
    /* CSS used here will be applied after bootstrap.css */

    /*.dropdown {*/
        /*display:inline-block;*/
        /*margin-left:20px;*/
        /*padding:10px;*/
    /*}*/


    .glyphicon-bell {

        font-size:1.7rem;
    }

    .notifications {
        min-width:420px;
    }

    .notifications-wrapper {
        overflow:auto;
        max-height:250px;
    }

    .menu-title {
        color:#ff7788;
        font-size:1.5rem;
        display:inline-block;
    }

    .glyphicon-circle-arrow-right {
        margin-left:10px;
    }


    .notification-heading, .notification-footer  {
        padding:2px 10px;
    }


    .dropdown-menu.divider {
        margin:5px 0;
    }

    .item-title {

        font-size:1.3rem;
        color:#000;

    }

    .notifications a.content {
        text-decoration:none;
        background:#ccc;

    }

    .notification-item {
        padding:10px;
        margin:5px;
        background:#ccc;
        border-radius:4px;
    }

    .notification-item-read {
        padding:10px;
        margin:5px;
        background:none;
        border-radius:4px;
    }




</style>
