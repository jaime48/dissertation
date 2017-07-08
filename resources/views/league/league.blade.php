



<html>
<body>
@include('navi');
@include('league.sidebar');
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<div class="mainContent">
    <div id="page-content-wrapper" hidden="hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>No league existing</h1>
                    <p>Please create a league</p>

                    <a href="createLeague" class="btn btn-default" id="menu-toggle">Create</a>
                </div>
            </div>
        </div>
    </div>
    <div id="leagueInfo" hidden="hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <h2>League Info</h2>
                        <p>The general information of my league</p>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th align="right">League Name</th>
                                <td align="center">{{$leagueInfo['league_name']}}</td>
                                <th align="left">Sports Type</th>
                                <td align="center">
                                    <?php
                                    switch ($leagueInfo['sports_type']) {
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
                                <th align="left">Registered Region</th>
                                <td align="center">{{$leagueInfo['registered_region']}}</td>
                                <th align="right">Manager</th>
                                <td align="center">{{$leagueInfo['manager_name']}}</td>

                            </tr>
                            <tr>
                                <th align="center">Contact</th>
                                <td align="center">{{$leagueInfo['contact']}}</td>
                                <th align="right">Email</th>
                                <td align="center">{{$leagueInfo['email']}}</td>

                            </tr>
                            <tr>
                                <th align="center">Created Time</th>
                                <td align="center">{{$leagueInfo['created_at']}}</td>
                                <th align="right">Start Time</th>
                                <td align="center">{{$leagueInfo['start_time']}}</td>

                            </tr>
                            <tr>
                                <th align="center">End Time</th>
                                <td align="center">{{$leagueInfo['end_time']}}</td>
                                <th align="right">Remarks</th>
                                <td align="center">{{$leagueInfo['remarks']}}</td>

                            </tr>
                            <tr>
                                <th align="center">File</th>
                                <td align="center"><a href="{!! route('downLoadFile', ['file'=>$leagueInfo['file']]) !!}">{{$leagueInfo['file']}}</a></td>
                                <th align="right"></th>
                                <td align="center"><a href="{!! route('exportInfo', ['infoId'=>$leagueInfo['id']]) !!}" class="btn btn-success">Export Info</a></td>
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
        var data='';
        var value = '{{$leagueInfo['league_name']}}';
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