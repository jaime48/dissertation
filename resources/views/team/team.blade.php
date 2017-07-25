<html>
<body>
@include('navi');
@include('team.sidebar');
<div class="mainContent">
    <div id="page-content-wrapper" hidden="hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>No team existing</h1>
                    <p>Please create a team</p>

                    <a href="team.createTeam" class="btn btn-default" id="menu-toggle">Create</a>
                </div>
            </div>
        </div>
    </div>
    <div id="leagueInfo" hidden="hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <h2>Team Info</h2>
                        <p>The general information of my league</p>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th align="right">League Name</th>
                                <td align="center"><img src="{{asset('images/teams/'.$teamInfo['logo'])}}" style="width:25px;height:25px">&nbsp;&nbsp;&nbsp;{{$teamInfo['name']}}</td>
                                <th align="left">Sports Type</th>
                                <td align="center">
                                    <?php
                                    switch ($teamInfo['sports_type']) {
                                        case 1:
                                            echo "football";
                                            break;
                                        case 2:
                                            echo "basketball";
                                            break;
                                        case 3:
                                            echo "baseball";
                                            break;
                                        case 4:
                                            echo "ice hockey";
                                            break;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th align="left">Location</th>
                                <td align="center">{{$teamInfo['location']}}</td>
                                <th align="right">Manager</th>
                                <td align="center">{{$teamInfo['manager_name']}}</td>

                            </tr>
                            <tr>
                                <th align="center">Contact</th>
                                <td align="center">{{$teamInfo['contact']}}</td>
                                <th align="right">Email</th>
                                <td align="center">{{$teamInfo['email']}}</td>
                            </tr>
                            <tr>
                                <th align="center">Created Time</th>
                                <td align="center">{{$teamInfo['created_at']}}</td>
                                <th align="right">Start Time</th>
                                <td align="center">{{$teamInfo['startTime']}}</td>

                            </tr>
                            <tr>
                                <th align="center">File</th>
                                <td align="center"><a href="{!! route('downLoadFile', ['file'=>$teamInfo['file']]) !!}">{{$teamInfo['file']}}</a></td>
                                <th align="right"></th>
                                <td align="center"><a href="{!! route('exportTeamInfo', ['infoId'=>$teamInfo['id']]) !!}" class="btn btn-success">Export Info</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
@include('footer')

<script>
    $(document).ready(function(){
        var value = '{{$teamInfo['manager_name']}}';
        if(value==''){
            $('#page-content-wrapper').show();
        }else{
            $('#page-content-wrapper').hide();
            $('#leagueInfo').show();
        }
    });

</script>

<style>
    th {
        width:150px
    }
</style>