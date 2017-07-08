<html>
<body>
@include('navi');
@include('league.sidebar');
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('css/chosen.min.css')}}">

<script src="{{asset('js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('js/charts/Chart.bundle.min.js')}}"></script>
<script src="{{asset('js/charts/Chart.min.js')}}"></script>



<div class="mainFrame">
    <div class="container">
        <div class="row col-md-12">
            <div class="row col-md-5">
                Choose the team:&nbsp;&nbsp;&nbsp;
                <select id="selectTeam" name="selectTeam" style="width:35%">
                    <option value="" disabled selected>Select a team</option>
                    <option value="1" >Select a team</option>
                </select>&nbsp;
                <a href="#" class="btn btn-primary btn-xs" id="teamData"> show team stats</a>
            </div>
            <div class="row col-md-2" style="align-content:center">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VS
            </div>
            <div class="row col-md-5">
                <select id="selectTeam2" name="selectTeam2" style="width:35%">
                    <option value="" disabled selected>Select a team</option>
                    <option value="1" >Select a team</option>
                </select>&nbsp;
                <a href="#" class="btn btn-primary btn-xs" id="teamData2"> show team stats</a>
            </div>

            <br><br>

    </div>
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
            url:'fetchTeams'

        }).done(function(msg){
            $('#selectTeam').find('option:not(:disabled)').remove();

            $.each(msg, function(key, value) {
                $('#selectTeam').append(new Option(value.name, value.id));

            });
            $('#selectTeam2').find('option:not(:disabled)').remove();

            $.each(msg, function(key, value) {
                $('#selectTeam2').append(new Option(value.name, value.id));

            });


        });

        $('#selectTeam').change(function(){
            var val = $(this).val();
            $.ajax({
                method: 'GET',
                url:'teamMembers',
                data:{'team_id':val}
            }).done(function(data){
                $('#selectPlayer').find('option:not(:disabled)').remove();
                $.each(data , function(key, value){
                    console.log(value);
                    $('#selectPlayer').append(new Option(value.user.first_name+' '+value.user.last_name, value.user_id));
                });


            });
        });

        $('#selectTeam2').change(function(){
            var val = $(this).val();
            $.ajax({
                method: 'GET',
                url:'teamMembers',
                data:{'team_id':val}
            }).done(function(data){

                $('#selectPlayer2').find('option:not(:disabled)').remove();
                $.each(data , function(key, value){
                    $('#selectPlayer2').append(new Option(value.user.first_name+' '+value.user.last_name, value.user_id));
                });

            });
        });


        $('#teamData').click(function(){
            myChart1 = null;
            myChart = null;
            $teamId = $('#selectTeam').val();
            var $teamData=[] ;
            var $winRate=[];
            $.ajax({
                async:false,
                url: 'teamStats',
                method:'GET',
                data: {'team_id':$teamId}
            }).done(function(msg){
                $("#h2Team1 img").remove();
                $('#h2Team1').prepend('<img src="images/teams/'+msg.teamInfo.logo+'" height="40" width="40">');
                $('#h2Team1Name').text(msg.teamInfo.name);
                for(var i=1;i<=9;i++){
                    msg['0'+i] == undefined ? $teamData.push(0) : $teamData.push(msg['0'+i].win_num);
                }

                for(var i=10;i<=12;i++) {
                    msg[i] == undefined ? $teamData.push(0) : $teamData.push(msg[i].win_num);
                }

                for(var i=1;i<=9;i++){
                    msg['0'+i] == undefined ? $winRate.push(0) : $winRate.push(msg['0'+i].win_rate);
                }

                for(var i=10;i<=12;i++) {
                    msg[i] == undefined ? $teamData.push(0) : $winRate.push(msg[i].win_rate);
                }



            });
            var ctx = document.getElementById("myChart").getContext('2d');
            myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                    datasets: [{
                        label: 'wins',
                        data: $teamData,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            scaleLabel: { display: true, labelString: '' },
                            position: 'left', id: 'y-axis-1',type: 'linear',
                            ticks: { min: 0, beginAtZero: true, stepSize: 2, max: 10 }
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


            var ctx1 = document.getElementById("myChart1").getContext('2d');
            myChart1 = new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                    datasets: [{
                        label: 'win rate(%)',
                        data: $winRate,
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            scaleLabel: { display: true, labelString: '' },
                            position: 'left', id: 'y-axis-1',type: 'linear',
                            ticks: { min: 0, beginAtZero: true, stepSize: 0.2, max: 1 }
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
            $('#playerStats').hide();
            $('#teamStats').show();
        });

        $('#teamData2').click(function(){
            myChart4 = null;
            myChart5 = null;
            $teamId = $('#selectTeam2').val();
            var $teamData2=[] ;
            var $winRate2=[];
            $.ajax({
                async:false,
                url: 'teamStats',
                method:'GET',
                data: {'team_id':$teamId}
            }).done(function(msg){
                $("#h2Team2 img").remove();
                $('#h2Team2').prepend('<img src="images/teams/'+msg.teamInfo.logo+'" height="40" width="40">');
                $('#h2Team2Name').text(msg.teamInfo.name);
                for(var i=1;i<=9;i++){
                    msg['0'+i] == undefined ? $teamData2.push(0) : $teamData2.push(msg['0'+i].win_num);
                }

                for(var i=10;i<=12;i++) {
                    msg[i] == undefined ? $teamData2.push(0) : $teamData2.push(msg[i].win_num);
                }

                for(var i=1;i<=9;i++){
                    msg['0'+i] == undefined ? $winRate2.push(0) : $winRate2.push(msg['0'+i].win_rate);
                }

                for(var i=10;i<=12;i++) {
                    msg[i] == undefined ? $teamData2.push(0) : $winRate2.push(msg[i].win_rate);
                }
            });
            var ctx4 = document.getElementById("myChart4").getContext('2d');
            myChart = new Chart(ctx4, {
                type: 'bar',
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                    datasets: [{
                        label: 'wins',
                        data: $teamData2,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            scaleLabel: { display: true, labelString: '' },
                            position: 'left', id: 'y-axis-1',type: 'linear',
                            ticks: { min: 0, beginAtZero: true, stepSize: 2, max: 10 }
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


            var ctx5 = document.getElementById("myChart5").getContext('2d');
            myChart1 = new Chart(ctx5, {
                type: 'line',
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                    datasets: [{
                        label: 'win rate(%)',
                        data: $winRate2,
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            scaleLabel: { display: true, labelString: '' },
                            position: 'left', id: 'y-axis-1',type: 'linear',
                            ticks: { min: 0, beginAtZero: true, stepSize: 0.2, max: 1 }
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
            $('#playerStats').hide();
            $('#teamStats').show();
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

