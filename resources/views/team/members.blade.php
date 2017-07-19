<html>
<body>
@include('navi');
@include('team.sidebar');
<link href="{{asset('css/responsiveTable/dataTable.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/chosen.min.css')}}">
<script src="{{asset('js/responsiveTable/responsiveTable.js')}}"></script>
<script src="{{asset('js/chosen.jquery.min.js')}}"></script>



<div class="mainContent1" style="min-height:500px">
    <div class="container">
        <div class="row col-md-12 custyle">
            <table id="memberInfoTable" class="table table-striped">

                <thead>
                <a href="#" class="btn btn-primary btn-xs pull-right" id="addTeam"><b>+</b> Add a member</a>
                <br><br>
                <tr>
                    <th>Name</th>
                    <th>Team Name</th>
                    <th>Salary(million)</th>
                    <th>Analysis</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @php
                    foreach($memberInfo as $info){

                        echo '<tr>
                        <td>'.$info->user->first_name.' '.$info->user->last_name.'</td>
                        <td>'.$info->team->name.'</td>
                        <td>'.$info->salary.'</td>
                        <td>'.$info->analysis.'</td>
                        <td>'.$info->status.'</td>

                        <td class="text-center" style="width:100px"><a class=\'btn btn-info btn-xs\' onClick="editMemberInfo('.$info->id.')"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs" onClick="deleteMember('.$info["id"].')"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                    </tr>';
                    }
                @endphp

                </tbody>
            </table>
        </div>

    </div>
</div>
<div id="MemberInfoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <form name="editMember" action='team.editMemberInfo' method="POST">
        <div class="modal-content">
{{csrf_field()}}
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
                                            <th width="20%">Name</th>
                                            <td id="txt_memberName" name="txt_memberName" width="80%"></td>
                                        </tr>
                                        <tr>
                                            <th width="20%">Team Name</th>
                                            <td id="txt_teamName" name="txt_teamName" width="80%"></td>
                                        </tr>
                                        <tr>
                                            <th width="20%">Salary(million)</th>
                                            <td id="txt_sportType" width="80%"><input id="salary" name="salary" style="text-align:center;"></td>
                                        </tr>
                                        <tr>
                                            <th width="20%">Analysis</th>
                                            <td id="txt_createdAt" width="80%"><input id="analysis" name='analysis' style="text-align:center;"></td>
                                        </tr>
                                        <tr>
                                            <th width="20%">Status</th>
                                            <td id="txt_createdAt" width="80%"><input id="status" name='status' style="text-align:center;"></td>
                                        </tr>
                                        <input id='member_id' name='member_id' hidden="hidden">
                                    </table>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-submit" aria-hidden="true">submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>
        </form>
    </div>
</div>


<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog resize">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete member</h4>
            </div>

            <div class="modal-body">Are you sure to delete this member?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="confirmDelete">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div>

    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addTeamModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add a member</h4>
            </div>
            <form name="addTeam" method="post" action="team.addMembers">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <p>Choose the member</p>

                    <select multiple id="selectMembers" name="selectMembers[]" class="selectpicker">

                    </select>&nbsp;<div class="help-tip">
                        <span>Select the members you want, supporting key word search and multiple selection</span>
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

</body>
</html>
@include('footer')
<style>
    .mainContent1 {
        /*min-height: 500px;*/
        margin-left:300px;
        margin-top:60px;
    }
    #memberInfoTable th {
        width:10%;
        text-align:center;
        font-size:12px;

    }
    td {
        text-align:center;
        font-size:12px;
    }

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


</style>
<script>
    $(document).ready(function(){
        $('#memberInfoTable').dataTable();
    });

    function editMemberInfo($info){
        console.log($info);
        $.ajax({
            //async:false,
            method:'GET',
            url:'team.getMemberInfo',
            data:{id:$info}

        }).done(function(msg){
            console.log(msg);
            $('#txt_memberName').text(msg.user.first_name+' '+msg.user.last_name);
            $('#txt_teamName').text(msg.team.name);
            $('#salary').val(msg.salary);
            $('#analysis').val(msg.analysis);
            $('#status').val(msg.status);
            $('#member_id').val(msg.id);

            $('#MemberInfoModal').modal().show();
        })


    }


    function deleteMember(info){

        $('#deleteModal').modal().show().on('click','#confirmDelete',function(){
            $('#deleteModal').hide();
            $.ajax({
                method: 'GET',
                url: 'team.deleteSelectedMember',
                data:{id:info}
            }).done(function(msg){
                if(msg==1){


                }else{
                    alert('delete failed');
                }
                window.location.href='team.members';
            });
        });
    }

    $('#addTeam').click(function(){
        $.ajax({
            //async:false,
            method:'GET',
            url:'team.getSelectMember'

        }).done(function(msg){
            console.log(msg);
            $('#selectTeam').find('option')
                    .remove();
            $.each(msg, function(key, value) {
                $('#selectMembers')
                        .append(new Option(value.first_name+' '+value.last_name, value.id));
            });
            $('#selectMembers').chosen({width:"50%"});
            $('#addTeamModal').modal().show();
        })
    });

</script>

