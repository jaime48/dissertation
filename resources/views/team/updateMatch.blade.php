<html>
<body>
@include('navi');
@include('team.sidebar');
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('css/chosen.min.css')}}">

<script src="{{asset('js/chosen.jquery.min.js')}}"></script>



<div class="mainContent">
    <div class="container">

        <strong>
            Update Match Score:<br><br>
            {{$matchInfo->team1Name}}&nbsp;&nbsp;
            <input id='matchId' name="matchId" hidden="hidden" value="{{$matchInfo->Id}}">
            <input id='team1Id' name="team1Id" hidden="hidden" value="{{$matchInfo->team1}}">
            <input id="team1Score" name="team1Score" style="width:50px"> &nbsp;VS &nbsp;
            <input id='team2Id' name="team2Id" hidden="hidden" value="{{$matchInfo->team2}}">
            <input id="team2Score" name="team2Score" style="width:50px">&nbsp;&nbsp;{{$matchInfo->team2Name}}&nbsp;&nbsp;
            <button type="button" class="btn btn-primary btn-sm" id="teamSubmit">Update</button>

            <hr>

            <p>Update player Statistics:</p>
            <select id="selectPlayer" name="selectPlayer" class="selectpicker">
                <option value="" disabled="disabled" selected="selected">please select a player</option>
                <optgroup label="{{$matchInfo->team1Name}}">

                    @foreach($matchInfo->team1Players as $playerInfo){
                        echo '<option value="{{$playerInfo->user_id}}">{{$playerInfo->name}}</option>';
                    }
                    @endforeach

                </optgroup>
                <optgroup label="{{$matchInfo->team2Name}}">

                    @foreach($matchInfo->team2Players as $playerInfo){
                    echo '<option value="{{$playerInfo->user_id}}">{{$playerInfo->name}}</option>';
                    }
                    @endforeach
                </optgroup>
            </select>
        </strong>
        <br><br>
        <div id="playerStats" hidden="hidden">
            <strong>
                Points:&nbsp;&nbsp;<input id="points" name="points">
                &nbsp;&nbsp;Assists:&nbsp;&nbsp;<input id="assists" name="assists"><br> <br>
                Fouls:&nbsp;&nbsp;&nbsp;<input id="fouls" name="fouls">
                &nbsp;&nbsp;Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="time" name="time">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-primary btn-sm" id="playerSubmit">Update</button>
            </strong>
        </div>
    </div>
</div>


</div>
<div class="modal fade" id="successModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Statistics</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success">
                    <strong>Update Success!</strong>
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



</body>
</html>
@include('footer')
<style>


    /* CSS animation */

    @-webkit-keyframes fadeIn {
        0% {
            opacity:0;
            transform: scale(0.6);
        }

        100% {
            opacity:100%;
            transform: scale(1);
        }
    }

    @keyframes fadeIn {
        0% { opacity:0; }
        100% { opacity:100%; }
    }
    .custab{
        border: 1px solid #ccc;
        padding: 5px;
        margin: 5% 0;
        box-shadow: 3px 3px 2px #ccc;
        transition: 0.5s;
    }
    .custab:hover{
        box-shadow: 3px 3px 0px transparent;
        transition: 0.5s;
    }
    .resize {

        width: 360px;

    }
</style>
<script>
    $('#selectPlayer').chosen({width:"20%"});
    $('#selectPlayer').change(function(){
        $('#playerStats').show();
    });
    $('#teamSubmit').click(function(){
        $.ajax({
            //async:false,
            method:'GET',
            url:'UpdateTeamScore',
            data:{'matchId':$('#matchId').val(),'team1':$('#team1Id').val(),'team2':$('#team2Id').val(),'team1Score':$('#team1Score').val(),'team2Score':$('#team2Score').val()}
        }).done(function(msg){
            console.log(22);
            console.log(msg);
            if(msg==1){
                $('#successModal').modal('show');
            }
        })
    });

    $('#playerSubmit').click(function(){
        $.ajax({
            //async:false,
            method:'GET',
            url:'UpdatePlayerStats',
            data:{'matchId':$('#matchId').val(),'playerId':$('#selectPlayer').val(),'points':$('#points').val(),'assists':$('#assists').val(),'fouls':$('#fouls').val(),'time':$('#time').val()}
        }).done(function(msg){
            console.log(msg);
            if(msg==1){
                $('#successModal').modal('show');
            }
        })
    });

    function teamInfo(info){
        $.ajax({
            method: 'GET',
            url: 'getCurrentTeam',
            data:{id:info}
        }).done(function(msg){
            $('#txt_teamName').text(msg.name);
            $('#txt_leagueName').text(msg.league_name);
            $('#txt_sportType').text(msg.sports_type);
            $('#txt_createdAt').text(msg.created_at);
            $('#teaminfoModal').modal().show();
        });
    }

    function deleteTeam(info){

        $('#deleteModal').modal().show().on('click','#confirmDelete',function(){
            $('#deleteModal').hide();
            $.ajax({
                method: 'GET',
                url: 'deleteSelectedTeam',
                data:{id:info}
            }).done(function(msg){
                if(msg==1){


                }else{
                    alert('delete failed');
                }
                window.location.href='teams';
            });
        });


    }
</script>

