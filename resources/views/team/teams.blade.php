<html>
<body>
@include('navi');
@include('league.sidebar');
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('css/chosen.min.css')}}">

<script src="{{asset('js/chosen.jquery.min.js')}}"></script>



<div class="mainContent">
    <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                <a href="#" class="btn btn-primary btn-xs pull-right" id="addTeam"><b>+</b> Add a team</a>
                <tr>
                    <th></th>
                    <th>Team Name</th>

                    <th class="text-center">Action</th>
                </tr>
                </thead>
                @php
                    foreach($teamsInfo as $info){

                  echo '<tr >
                         <td align=\'right\'><img src=\''.asset('images/teams/'.$info['logo']).'\' height="18" width="18"></td>
                         <td align=\'left\'><strong>'.$info["name"].'</strong></td>
                         <td class="text-center"><a class=\'btn btn-info btn-xs\' onClick="teamInfo('.$info["id"].')"><span class="glyphicon glyphicon-edit"></span> View</a> <a href="#" class="btn btn-danger btn-xs" onClick="deleteTeam('.$info["id"].')"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                        </tr>';
                    }
                @endphp
            </table>
        </div>
    </div>
</div>
<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog resize">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete team</h4>
            </div>

            <div class="modal-body">Are you sure to delete this team?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="confirmDelete">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div>

    </div>
</div>



<div class="container">


    <!-- Modal -->
    <div class="modal fade" id="addTeamModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add a team</h4>
                </div>
                <form name="addTeam" method="post" action="addTeam">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <p>Choose the team</p>

                        <select multiple id="selectTeam" name="selectTeam[]" class="selectpicker">

                        </select>&nbsp;<div class="help-tip">
                            <span>Select the teams you want, supporting key word search and multiple selection</span>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>
<div id="teaminfoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">
                    <i class="glyphicon glyphicon-user"></i> Team Profile
                </h4>
            </div>

            <div class="modal-body">

                <div id="modal-loader" style="display: none; text-align: center;">
                    <img src="ajax-loader.gif">
                </div>

                <div id="dynamic-content"> <!-- mysql data will load in table -->

                    <div class="row">
                        <div class="col-md-12">

                            <div class="table-responsive">

                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <th width="20%">Team Name</th>
                                        <td id="txt_teamName" width="80%"></td>
                                    </tr>
                                    <tr>
                                        <th width="20%">League Name</th>
                                        <td id="txt_leagueName" width="80%"></td>
                                    </tr>
                                    <tr>
                                        <th width="20%">Sport Type</th>
                                        <td id="txt_sportType" width="80%"></td>
                                    </tr>
                                    <tr>
                                        <th width="20%">Created At</th>
                                        <td id="txt_createdAt" width="80%"></td>
                                    </tr>
                                </table>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


</body>
</html>
@include('footer')
<style>
    .help-tip{
        position: absolute;
        display:inline-block;
        align-self: center;
        margin-top:5px;
        text-align: center;
        background-color: #050b64;
        border-radius: 50%;
        width: 17px;
        height: 17px;
        font-size: 14px;
        line-height: 20px;
        cursor: default;
    }

    .help-tip:before{
        content:'?';
        font-weight: bold;
        color:#fff;
    }

    .help-tip:hover span{
        display:block;
        transform-origin: 100% 0%;

        -webkit-animation: fadeIn 0.3s ease-in-out;
        animation: fadeIn 0.3s ease-in-out;

    }

    .help-tip span{	/* The tooltip */
        display: none;
        text-align: left;
        background-color: #1E2021;
        padding: 20px;
        width: 300px;
        position: absolute;
        border-radius: 3px;
        box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
        right: -4px;
        color: #FFF;
        font-size: 13px;
        line-height: 1.4;
    }

    .help-tip span:before{ /* The pointer of the tooltip */
        position: absolute;
        content: '';
        width:0;
        height: 0;
        border:6px solid transparent;
        border-bottom-color:#1E2021;
        right:10px;
        top:-12px;
    }

    .help-tip span:after{ /* Prevents the tooltip from being hidden */
        width:100%;
        height:40px;
        content:'';
        position: absolute;
        top:-40px;
        left:0;
    }

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

    $('#addTeam').click(function(){
        $.ajax({
            //async:false,
            method:'GET',
            url:'getSelectTeam'

        }).done(function(msg){
            $('#selectTeam').find('option')
                    .remove();
            $.each(msg, function(key, value) {
                $('#selectTeam')
                        .append(new Option(value.name, value.id));
            });
            $('#selectTeam').chosen({width:"50%"});
            $('#addTeamModal').modal().show();
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

