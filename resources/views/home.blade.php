<!-------------------------------------------------------->
<script src="{{asset('js/jquery.js')}}"></script>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/modern-business.css')}}" rel="stylesheet">
<link href="{{asset('css/home.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
<!-- Custom Fonts -->

<!-------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ProSports</title>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-----------------------navigation--------------------------->
@include('navi')
<!------------------------------------------------------------>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <a href="#"><div class="fill" style="background-image:url('{{asset('images/football.jpg')}}');"></div></a>

            <div class="carousel-caption">
                <h2>Together Stronger</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('{{asset('images/multi.jpg')}}');"></div>
            <div class="carousel-caption">
                <h2>Choose your favourite</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('{{asset('images/slide3.jpg')}}');"></div>
            <div class="carousel-caption">
                <h2>Create something yourself</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
<div class="index-content">
    <div class="container">
        <h1 class="page-header">
            Welcome to ProSports
        </h1>
        <a href="league">
            <div class="col-lg-4">
                <div class="card">
                    <img src="{{asset('images/league.jpg')}}">
                    <h4>My League</h4>
                    <p>
                        As a league manager you could create or edit the info of your league.
                        View all the teams and members registered in the league.
                        Timetable for matches and personal agenda
                    </p>
                    <a href="league" class="blue-button">Learn More</a>
                </div>
            </div>
        </a>
        <a href="team.team">
            <div class="col-lg-4">
                <div class="card">
                    <img src="{{asset('images/team.jpg')}}" style="width:350px;height:184px">
                    <h4> My Team</h4>
                    <p> As a team manager you could create or edit the info of your team.
                        View your the team and members registered in the team.
                        Timetable for matches and personal agenda</p>
                    <a href="team.team" class="blue-button">Read More</a>
                </div>
            </div>
        </a>
        <a href="social">
            <div class="col-lg-4">
                <div class="card">
                    <img src="{{asset('images/social.jpg')}}"  style="width:350px;height:182px">
                    <h4>Social</h4>
                    <p> Adding friends, adding or joining a group.<br>
                        Online chatting room.<br>
                        Showing others what's on your mind.
                        <br><br>
                    </p>
                    <a href="social" class="blue-button">Read More</a>
                </div>
            </div>
        </a>

    </div>
</div>
<!-- Page Content -->
<div class="container">


    <!-- Portfolio Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">News</h2>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="http://www.bbc.co.uk/sport/swimming/40671849">
                <img class="img-responsive img-portfolio img-hover" src="{{asset('images/news/d.jpg')}}" alt="" style="height:202px">
                <span>22 and done it all? Get a lion tattoo and go for history</span>
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="http://www.bbc.co.uk/sport/golf/40683022">
                <img class="img-responsive img-portfolio img-hover" src="{{asset('images/news/2.jpg')}}" alt="">
                Sportsday - rolling sports news and gossip
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="http://www.bbc.co.uk/news/business-40636746">
                <img class="img-responsive img-portfolio img-hover" src="{{asset('images/news/3.jpg')}}" alt="">
                Watch: Open leader Kuchar chips in for birdie at the second
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="http://www.bbc.co.uk/sport/football/40678811">
                <img class="img-responsive img-portfolio img-hover" src="{{asset('images/news/4.jpg')}}" alt="">
                Romelu Lukaku has scored in his past two Manchester United appearances
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="http://www.bbc.co.uk/sport/golf/40677025">
                <img class="img-responsive img-portfolio img-hover" src="{{asset('images/news/5.jpg')}}" alt="">
                Philippe Coutinho scored 14 goals last season
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="http://www.bbc.co.uk/sport/cricket/40674340">
                <img class="img-responsive img-portfolio img-hover" src="{{asset('images/news/6.jpg')}}" alt="">
                Highlights: Kaur's superb innings helps India reach final
            </a>
        </div>
    </div>
    <!-- /.row -->
    <!-- video Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Video</h2>
        </div>
        <div class="col-md-4 col-sm-6">
            <video width="360" height="231" controls>
                <source src="{{asset('videos/small.mp4')}}" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-4 col-sm-6">
            <video width="360" height="231" controls>
                <source src="{{asset('videos/sample1.mp4')}}" type="video/mp4">
            </video>
        </div>
        <div class="col-md-4 col-sm-6">
            <video width="360" height="231" controls>
                <source src="{{asset('videos/sample2.mp4')}}" type="video/mp4">
            </video>
        </div>

    </div>
    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">ProSports Features</h2>
        </div>
        <div class="col-md-6">
            <p>The ProSports template  includes:</p>
            <ul>
                <li><strong>Bootstrap v3.3.7</strong>
                </li>
                <li>jQuery v1.11.1</li>
                <li>Font Awesome v4.2.0</li>
                <li>Working PHP contact form with validation</li>
                <li>Unstyled page elements for easy customization</li>
                <li> HTML pages</li>
            </ul>
            <p>Description.</p>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="http://placehold.it/700x450" alt="">
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <p>Description</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
            </div>
        </div>
    </div>
    <hr>
</div>
</body>
</html>
<!-----------------------footer--------------------------->
@include('footer')
<!------------------------------------------------------------>
