<html>
<body>
@include('navi');
@include('league.sidebar');
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('css/chosen.min.css')}}">

<script src="{{asset('js/chosen.jquery.min.js')}}"></script>
<link href="{{asset('css/responsiveTable/dataTable.css')}}" rel="stylesheet" type="text/css" />

<script src="{{asset('js/responsiveTable/responsiveTable.js')}}"></script>

<div class="mainContent">
    <div class="container">
        <div class="row col-md-8 col-md-offset-2 custyle">
            <table class="table table-striped" id="matchesList">
                <thead>

                <tr>
                    <th>Match</th>

                    <th>Time</th>

                    <th class="text-center">Action</th>
                </tr>
                </thead>
                @php
                    foreach($matchesInfo as $info){

                  echo '<tr>
                         <td>'.$info["Subject"].'</td>
                          <td>'.$info["StartTime"].'<strong> TO</strong> '.$info["EndTime"].'</td>
                         <td class="text-center">
                         <a class=\'btn btn-info btn-xs matchView\'>
                         <span class="glyphicon glyphicon-eye-open"></span> View</a>
                          <a href="updateMatch?matchId='.$info['Id'].'" class="btn btn-info btn-xs matchUpdate">
                          <span class="glyphicon glyphicon-edit"></span> Update</a></td>
                        </tr>';
                    }
                @endphp
            </table>
        </div>

    </div>
</div>






</body>
</html>

@include('footer')
<style>
    .mainContent {
        /*min-height: 500px;*/
        margin-left:300px;
        margin-top:60px;
    }

    /* CSS animation */


</style>
<script>
    $(document).ready(function(){
        $('#matchesList').dataTable();
    });




</script>

