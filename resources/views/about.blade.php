<script src="{{asset('js/jquery.js')}}"></script>
<!-- Custom CSS -->
<link href="{{asset('css/round-about.css')}}" rel="stylesheet">
<script src="{{asset('js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('js/charts/Chart.bundle.min.js')}}"></script>
<script src="{{asset('js/charts/Chart.min.js')}}"></script>

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
    </div>
    <div class="row">
        <div class="col-lg-6">
            <br><br>
            <canvas id="age_group" style="height:20vh; width:20vw"></canvas>
        </div>
        <div class="col-lg-6"><br><br>
            <canvas id="use_time" style="height:20vh; width:20vw"></canvas>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <br><br>
            <canvas id="used_before" style="height:20vh; width:20vw"></canvas>
        </div>
        <div class="col-lg-6"><br><br>
            <canvas id="rate_yourself" style="height:20vh; width:20vw"></canvas>

        </div>
    </div>
</div>

<br><br>
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


    new Chart(document.getElementById("age_group"), {
        type: 'pie',
        data: {
            labels: ["0-18", "18-30", "30-50", ">50"],
            datasets: [{
                label: "age group (years old)",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
                data: [{{$avgData->dateAge[0]->num}},{{$avgData->dateAge[1]->num}},{{$avgData->dateAge[2]->num}},{{$avgData->dateAge[3]->num}}]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'age groups for users on ProSports'
            }
        }
    });

    new Chart(document.getElementById("use_time"), {
        type: 'pie',
        data: {
            labels: [" < 1 month", "1 month to 1 year", "1 to 3 years", "> 3 years"],
            datasets: [
                {
                    label: "lengthcof time",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                    data: [{{$avgData->use_time[0]->num}},{{$avgData->use_time[1]->num}},{{$avgData->use_time[2]->num}},{{$avgData->use_time[3]->num}}]
                }
            ]
        },
        options: {

            title: {
                display: true,
                text: 'Time of using this website'
            },

        }
    });


    new Chart(document.getElementById("used_before"), {
        type: 'doughnut',
        data: {
            labels: ["used before", "not used before"],
            datasets: [
                {
                    label: "Population (millions)",
                    backgroundColor: ["#3e95cd", "#8e5ea2"],
                    data: [{{$avgData->used_before[1]->num}},{{$avgData->used_before[0]->num}}]
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'used or not used similar website before'
            }
        }
    });

    new Chart(document.getElementById("rate_yourself"), {
        type: 'polarArea',
        data: {
            labels: ["beginner", "knowledgeable", "expert"],
            datasets: [
                {
                    label: "level of specialty",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                    data: [{{$avgData->rate_yourself[0]->num}},{{$avgData->rate_yourself[1]->num}},{{$avgData->rate_yourself[2]->num}}]
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'level of specialty'
            }
        }
    });

</script>