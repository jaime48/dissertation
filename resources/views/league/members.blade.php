<html>
<body>
@include('navi');
@include('league.sidebar');
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/responsiveTable/dataTable.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

<script src="{{asset('js/responsiveTable/responsiveTable.js')}}"></script>



<div class="mainContent1">
    <div class="container">
        <div class="row col-md-8 col-md-offset-2 custyle">
            <table id="memberInfoTable" class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Team Name</th>
                    <th>Salary(million)</th>
                    <th>Analysis</th>
                    <th>Status</th>
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
                    </tr>';
                    }
                @endphp

                </tbody>
            </table>
        </div>

    </div>
</div>



</body>
</html>
@include('footer')
<style>
    .mainContent1 {
        min-height: 500px;
        margin-left:300px;
        margin-top:60px;
    }
    th {
        text-align:center;
        font-size:12px;
        width:20%
    }
    td {
        text-align:center;
        font-size:12px;
    }

</style>
<script>
    $(document).ready(function(){
        $('#memberInfoTable').dataTable();
    });



</script>

