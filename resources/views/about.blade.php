<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Round About - Start Bootstrap Template</title>

    <script src="{{asset('js/jquery.js')}}"></script>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/round-about.css')}}" rel="stylesheet">
    <script src="{{asset('js/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('js/charts/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('js/charts/Chart.min.js')}}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->

</head>

<body>

<!-----------------------navigation--------------------------->
@include('navi')
<!------------------------------------------------------------>

<!-- Page Content -->
<div class="container">

    <!-- Introduction Row -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">About Us
                <small>It's Nice to Meet You!</small>
            </h1>
            <p>Are you having a good time?</p>
        </div>
    </div>

    <!-- Team Members Row -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Our Team</h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive img-center" src="{{asset('images/doudou.jpg')}}" alt="" >
            <h3>Yang Du
                <small>System Architect</small>
            </h3>
            <p>Have any issue? Contact me on Facebook</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive img-center" src="{{asset('images/doudou.jpg')}}" alt="">
            <h3>Yang Du
                <small>Product Manager</small>
            </h3>
            <p>Have any issue? Contact me on Facebook</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive img-center" src="{{asset('images/doudou.jpg')}}" alt="">
            <h3>Yang Du
                <small>Development Manager</small>
            </h3>
            <p>Have any issue? Contact me on Facebook</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive img-center" src="{{asset('images/doudou.jpg')}}" alt="">
            <h3>Yang Du
                <small> Chief Developer</small>
            </h3>
            <p>Have any issue? Contact me on Facebook</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive img-center" src="{{asset('images/doudou.jpg')}}" alt="">
            <h3>Yang Du
                <small>Chief Tester</small>
            </h3>
            <p>Have any issue? Contact me on Facebook</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-responsive img-center" src="{{asset('images/doudou.jpg')}}" alt="">
            <h3>Yang Du
                <small>Body Guard</small>
            </h3>
            <p>Have any issue? Contact me on Facebook</p>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-lg-6">
            <canvas id="bar-chart-horizontal" style="height:20vh; width:20vw"></canvas>
        </div>
        <div class="col-lg-6"><br><br>
            <strong>Do you want to share your opinion on our website? <br>Take two minutes of your precious time to do the questionnaire please. <br>Thank you.</strong>
        </div>

        <!-- Footer -->


    </div>
    <!-- /.container -->
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
</style>

<script>

    new Chart(document.getElementById("bar-chart-horizontal"), {
        type: 'horizontalBar',
        data: {
            labels: ["Overall", "Screen", "Terminology & System Information", "Learning", "System Capabilities"],
            datasets: [
                {
                    label: "Satisfaction (max:10)",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                    data: [{{$avgData->overall}},{{$avgData->screen}},{{$avgData->terminology}},{{$avgData->learning}},{{$avgData->system_capabilities}}]
                }
            ]
        },
        options: {
            legend: { display: true },
            title: {
                display: true,
                text: 'Statistics for User Interface Satisfaction'
            },
            scales: {
                xAxes: [{
                    scaleLabel: { display: true, labelString: '' },
                    position: 'left', id: 'y-axis-1',type: 'linear',
                    ticks: { min: 0, beginAtZero: true, stepSize: 2, max: 10 }
                }],

            }
        }
    });

</script>