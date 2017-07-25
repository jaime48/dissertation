<html>
<body>
@include('navi');
@include('team.sidebar');
{{--<link href="{{asset('css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">--}}


{{--<!-- Latest compiled and minified CSS -->--}}
{{--<link rel="stylesheet" href="{{asset('css/chosen.min.css')}}">--}}

<script src="{{asset('js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('js/charts/Chart.bundle.min.js')}}"></script>
<script src="{{asset('js/charts/Chart.min.js')}}"></script>



<div class="mainFrame">
    <div class="container">
        <div class="row col-md-12">
            <div class="row col-md-5">
                Choose the player:&nbsp;
                <select id="selectPlayer" name="selectPlayer" style="width:35%">
                    <option value="" disabled selected>Select a player</option>
                </select>&nbsp;
                <a href="#" class="btn btn-primary btn-xs" id="playerData"> show player stats</a>
            </div>
            <div class="row col-md-2">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  VS
            </div>
            <div class="row col-md-5">
                <select id="selectPlayer2" name="selectPlayer2" style="width:35%">
                    <option value="" disabled selected>Select a player</option>
                </select>&nbsp;
                <a href="#" class="btn btn-primary btn-xs" id="playerData2"> show player stats</a>
            </div>
        </div>

    </div>
        <div id="teamStats" style="display:none">
            <div class="row col-md-12">
                <div class="col-md-6">

                    <h2 id="h2Team1" align="center"><span id='h2Team1Name'></span></h2>
                    <div style="height:200px">
                        <div class="chart-container" style="height:10vh; width:30vw">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <br><br><br><br>
                    <div style="height:200px">
                        <div class="chart-container" style="height:10vh; width:30vw">
                            <canvas id="myChart1"></canvas>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-6">
                    <h2 id="h2Team2" align="center"><span id='h2Team2Name'></span></h2>
                    <div style="height:200px">
                        <div class="chart-container" style="height:10vh; width:30vw">
                            <canvas id="myChart4"></canvas>
                        </div>
                    </div>
                    <br><br><br><br>
                    <div style="height:200px">
                        <div class="chart-container" style="height:10vh; width:30vw">
                            <canvas id="myChart5"></canvas>
                        </div>
                    </div>
                    <br>
                </div>
                </div>


        </div>

        <div id="playerStats" style="display:none;margin-left:20px">

            <div class="row col-md-12">
                <div class="col-md-6">
                    <div style="margin-top:50px;">
                        <h2 id="h2Player"></h2>
                        <p>The general statistics of the player</p>
                        <table class="table" style="width:400px">
                            <tbody>
                            <tr>
                                <th align="right">Points</th>
                                <td align="left" id="playerPoints"></td>
                                <th align="left">Assists</th>
                                <td align="left" id="playerAssists">
                                </td>
                            </tr>
                            <tr>
                                <th align="left" >Fouls</th>
                                <td align="left" id="playerFouls"></td>
                                <th align="right">Time</th>
                                <td align="left" id="playerTime"></td>

                            </tr>
                            <tr>
                                <th align="center">Efficiency</th>
                                <td align="left" id="playerEfficiency"></td>
                                <th align="right"></th>
                                <td align="center"></td>

                            </tr>
                            </tbody>
                        </table>


                    </div>
                    <div style="height:200px">
                        <div class="chart-container" style="height:27vh; width:27vw">
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" style="display:none" id="secondPlayer">
                    <div style="margin-top:50px;">
                        <h2 id="h2Player2"></h2>
                        <p>The general statistics of the player</p>
                        <table class="table" style="width:400px">
                            <tbody>
                            <tr>
                                <th align="right">Points</th>
                                <td align="left" id="playerPoints2"></td>
                                <th align="left">Assists</th>
                                <td align="left" id="playerAssists2">
                                </td>
                            </tr>
                            <tr>
                                <th align="left" >Fouls</th>
                                <td align="left" id="playerFouls2"></td>
                                <th align="right">Time</th>
                                <td align="left" id="playerTime2"></td>

                            </tr>
                            <tr>
                                <th align="center">Efficiency</th>
                                <td align="left" id="playerEfficiency2"></td>
                                <th align="right"></th>
                                <td align="center"></td>

                            </tr>
                            </tbody>
                        </table>


                    </div>

                        <div style="height:200px">
                            <div class="chart-container" style="height:27vh; width:27vw">
                                <canvas id="myChart3"></canvas>
                            </div>
                        </div>

                </div>
            </div>
        </div>


        <br><br><br><br>
    </div>
</div>


<br><br><br><br>
</body>
</html>
@include('footer')
<style>
    th {
        width:70px
    }
    .mainFrame {
        min-height:700px;
        margin-left:300px;
        margin-top:40px;
    }
    a {
        display:inline-block;
    }
    select {
        display:inline-block;
    }
    td {
        align-content:left;
    }

</style>
<script>
    $(document).ready(function(){
        $.ajax({
            async:false,
            method:'GET',
            url:'team.teamMembers'

        }).done(function(msg){
            $('#selectPlayer').find('option:not(:disabled)').remove();

            $.each(msg, function(key, value) {
                $('#selectPlayer').append(new Option(value.user.first_name+' '+value.user.last_name, value.user_id));

            });
            $('#selectPlayer2').find('option:not(:disabled)').remove();

            $.each(msg, function(key, value) {
                $('#selectPlayer2').append(new Option(value.user.first_name+' '+value.user.last_name, value.user_id));

            });


        });

        $('#playerData').click(function(){
            $playerId = $('#selectPlayer').val();
            $playerData=[];
            $.ajax({
                async:false,
                url:'playerStats',
                data:{'playerId':$playerId},
                method:'GET'
            }).done(function(msg){
                console.log(msg);
                $('#h2Player').text(msg.name);
                $('#playerPoints').text(msg.averPoints);
                $('#playerAssists').text(msg.averAssists);
                $('#playerTime').text(msg.averTime);
                $('#playerFouls').text(msg.averfouls);
                $('#playerEfficiency').text(msg.efficiency);

                $playerData=[msg.ratioPoints,msg.ratioAssists,msg.ratioFouls,msg.ratioTime,msg.ratioEfficiency];
            });
            var ctx2 = document.getElementById("myChart2").getContext('2d');

            var myChart2 = new Chart(ctx2, {
                type: 'radar',
                data: {
                    labels: ["points","assists","fouls","time","efficiency"],
                    datasets: [{
                        label: 'ranking',
                        data: $playerData,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],

                        borderWidth: 1
                    }]
                },
                options: {

                    scales: {
                        yAxes: [{
                            scaleLabel: { display: true, labelString: 'Max 100' },
                            position: 'left', id: 'y-axis-1',type: 'linear',
                            ticks: { min: 0, beginAtZero: true, stepSize: 10, max: 100 }
                        }],
                        xAxes: [{
                            ticks: {
                                beginAtZero:false,
                                maximum:200
                            }
                        }]
                    }
                }
            });


            $('#teamStats').hide();
            $('#playerStats').show();
        });

        $('#playerData2').click(function(){
            $playerId = $('#selectPlayer2').val();
            $playerData=[];
            $.ajax({
                async:false,
                url:'playerStats',
                data:{'playerId':$playerId},
                method:'GET'
            }).done(function(msg){
                console.log(msg);
                $('#h2Player2').text(msg.name);
                $('#playerPoints2').text(msg.averPoints);
                $('#playerAssists2').text(msg.averAssists);
                $('#playerTime2').text(msg.averTime);
                $('#playerFouls2').text(msg.averfouls);
                $('#playerEfficiency2').text(msg.efficiency);

                $playerData=[msg.ratioPoints,msg.ratioAssists,msg.ratioFouls,msg.ratioTime,msg.ratioEfficiency];
            });
            var ctx3 = document.getElementById("myChart3").getContext('2d');

            var myChart3 = new Chart(ctx3, {
                type: 'radar',
                data: {
                    labels: ["points","assists","fouls","time","efficiency"],
                    datasets: [{
                        label: 'ranking',
                        data: $playerData,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],

                        borderWidth: 1
                    }]
                },
                options: {

                    scales: {
                        yAxes: [{
                            scaleLabel: { display: true, labelString: 'Max 100' },
                            position: 'left', id: 'y-axis-1',type: 'linear',
                            ticks: { min: 0, beginAtZero: true, stepSize: 6, max: 100 }
                        }],
                        xAxes: [{
                            ticks: {
                                beginAtZero:false,
                                maximum:200
                            }
                        }]
                    }
                }
            });


            $('#teamStats').hide();
            $('#playerStats').show();
            $('#secondPlayer').show();
        });


    });

</script>


<script>

</script>

