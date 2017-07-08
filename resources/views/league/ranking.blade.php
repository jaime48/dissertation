<html>
<body>
@include('navi');
@include('league.sidebar');
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<link href="{{asset('css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

<div class="container">
    <div class="col-md-5">
        <div id="sidebar" class="sidebar">
            <aside class="widget card widget--sidebar widget-standings">
                <div class="widget__title card__header card__header--has-btn">
                    <h4>{{$teamInfo->leagueName}}</h4>

                </div>
                <div class="widget__content card__content">
                    <div class="table-responsive">
                        <table class="table table-hover table-standings">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Teams</th>
                                <th>W</th>
                                <th>L</th>

                                <th>PTS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                                foreach($teamInfo as $info){
                                    echo ' <tr>
                                                <td>'.$i.'</td>
                                                <td><img src=\''.asset('images/teams/'.$info->logo).'\' height="18" width="18" align=\'right\'></td>
                                                <td>
                                                <div class="team-meta">
                                                    <div class="team-meta__info">

                                                    <h6 class="team-meta__name">'.$info->name.'</h6>
                                                    <span class="team-meta__place">'.$info->location.'</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td>'.$info->win.'</td>
                                                <td>'.$info->lose.'</td>
                                                <td>'.$info->score.'</td>
                                            </tr>';
                                    $i++;

                                }
                            @endphp

                            </tbody>
                        </table>
                    </div>

                </div>


            </aside>



        </div>
    </div>
    {{-----------------------------------------------------------------------------------------------------------------}}
    <div class="col-md-7">
        <div class="diagram">
            <table class="table-condensed">

                <tr>

                    <td class="col-md-1">
                        <div class="input-group">
                            <input type="text" name="name" class=" namateam" data-id="1" data-type="team_1" value="{{$teamInfo[0]->name}}">
                            <span  id='scoreIcon' class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>
                    </td>


                    <td class="col-md-1" rowspan="2" style="padding:0px; position:relative; min-width:50px;">
                        <div style="border-top: 2px solid #090; border-right: 2px solid #090; width:80%; height:25%; float: left; position:absolute; top:25%;"></div>
                        <div style="border-bottom: 2px solid #f00; border-right: 2px solid #f00; width:80%; height:25%; float: left; position:absolute; top:50%;"></div>
                        <div style="border-top: 2px solid #090; width: 20%; margin-left: 80%; float: right; position:absolute;"></div>
                    </td>




                    <td class="col-md-1" rowspan="2">
                        <div class="input-group">
                            <input type="text" name="name" class=" namateam"  data-id="9"data-type="team_1" value="">
                            <span class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>
                    </td>

                    <td class='col-md-1' rowspan='4' style='padding:0px; position:relative; min-width:50px;'>
                        <div style='border-top: 2px solid #090; border-right: 2px solid #090; width:80%; height:25%; float: left; position:absolute; top:25%;'></div>
                        <div style='border-bottom: 2px solid #f00; border-right: 2px solid #f00; width:80%; height:25%; float: left; position:absolute; top:50%;'></div>
                        <div style='border-top: 2px solid #090; width: 20%; margin-left: 80%; float: right; position:absolute;'></div>
                    </td>

                    <td class="col-md-1" rowspan="4">
                        <div class="input-group">
                            <input type="text" name="name" class=" namateam"  data-id="13"data-type="team_1" value="">
                            <span class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>
                    </td>

                    <td class="col-md-1" rowspan="8" style="padding:0px; position:relative; min-width:50px;">
                        <div style="border-top: 2px solid #090; border-right: 2px solid #090; width:80%; height:25%; float: left; position:absolute; top:25%;"></div>
                        <div style="border-bottom: 2px solid #f00; border-right: 2px solid #f00; width:80%; height:25%; float: left; position:absolute; top:50%;"></div>
                        <div style="border-top: 2px solid #090; width: 20%; margin-left: 80%; float: right; position:absolute;"></div>
                    </td>

                    <td class="col-md-1" rowspan="8">
                        <div class="input-group">
                            <input type="text" name="name" class=" namateam"  data-id="15"data-type="team_1" value="">

                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="col-md-1">
                        <div class="input-group">
                            <input type="text" name="name" class=" namateam" data-id="1" data-type="team_2" value="{{$teamInfo[7]->name}}">
                            <span class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="col-md-1">
                        <div class="input-group">
                            <input type="text" name="name" class=" namateam" data-id="2" data-type="team_1" value="{{$teamInfo[3]->name}}">
                            <span class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>
                    </td>
                    <td class="col-md-1" rowspan="2" style="padding:0px; position:relative; min-width:50px;">
                        <div style="border-top: 2px solid #090; border-right: 2px solid #090; width:80%; height:25%; float: left; position:absolute; top:25%;"></div>
                        <div style="border-bottom: 2px solid #f00; border-right: 2px solid #f00; width:80%; height:25%; float: left; position:absolute; top:50%;"></div>
                        <div style="border-top: 2px solid #090; width: 20%; margin-left: 80%; float: right; position:absolute;"></div>
                    </td>

                    <td class="col-md-1" rowspan="2">
                        <div class="input-group">
                            <input type="text" name="name" class=" namateam" data-id="9" data-type="team_2" value="">
                            <span class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>
                    </td>

                </tr>


                <tr>
                    <td class="col-md-1">
                        <div class="input-group">
                            <input type="text" name="name" class=" namateam" data-id="2" data-type="team_2" value="{{$teamInfo[4]->name}}">
                            <span class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>
                    </td>

                </tr>

                <tr>
                    <td class="col-md-1">
                        <div class="input-group">
                            <input type="text" name="name" class=" namateam" data-id="3" data-type="team_1" value="{{$teamInfo[1]->name}}">
                            <span class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>
                    </td>

                    <td class="col-md-1" rowspan="2" style="padding:0px; position:relative; min-width:50px;">
                        <div style="border-top: 2px solid #090; border-right: 2px solid #090; width:80%; height:25%; float: left; position:absolute; top:25%;"></div>
                        <div style="border-bottom: 2px solid #f00; border-right: 2px solid #f00; width:80%; height:25%; float: left; position:absolute; top:50%;"></div>
                        <div style="border-top: 2px solid #090; width: 20%; margin-left: 80%; float: right; position:absolute;"></div>
                    </td>

                    <td class="col-md-1" rowspan="2">
                        <div class="input-group">
                            <input type="text" name="name" class=" namateam"  data-id="10"data-type="team_1" value="">
                            <span class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>

                    </td>

                    <td class='col-md-1' rowspan='4' style='padding:0px; position:relative; min-width:50px;'>
                        <div style='border-top: 2px solid #090; border-right: 2px solid #090; width:80%; height:25%; float: left; position:absolute; top:25%;'></div>
                        <div style='border-bottom: 2px solid #f00; border-right: 2px solid #f00; width:80%; height:25%; float: left; position:absolute; top:50%;'></div>
                        <div style='border-top: 2px solid #090; width: 20%; margin-left: 80%; float: right; position:absolute;'></div>
                    </td>

                    <td class="col-md-1" rowspan="4">

                        <div class="input-group">
                            <input type="text" name="name" class=" namateam"  data-id="13"data-type="team_2" value="">
                            <span class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>

                    </td>
                </tr>


                <tr>
                    <td class="col-md-1">
                        <div class="input-group">
                            <input type="text" name="name" class=" namateam" data-id="3" data-type="team_2" value="{{$teamInfo[6]->name}}">
                            <span class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>
                    </td>

                </tr>

                <tr>

                    <td class="col-md-1">
                        <div class="input-group">
                            <input type="text" name="name" class=" namateam" data-id="4" data-type="team_1" value="{{$teamInfo[2]->name}}">
                            <span class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>
                    </td>

                    <td class="col-md-1" rowspan="2" style="padding:0px; position:relative; min-width:50px;">
                        <div style="border-top: 2px solid #090; border-right: 2px solid #090; width:80%; height:25%; float: left; position:absolute; top:25%;"></div>
                        <div style="border-bottom: 2px solid #f00; border-right: 2px solid #f00; width:80%; height:25%; float: left; position:absolute; top:50%;"></div>
                        <div style="border-top: 2px solid #090; width: 20%; margin-left: 80%; float: right; position:absolute;"></div>
                    </td>

                    <td class="col-md-1" rowspan="2">

                        <div class="input-group">
                            <input type="text" name="name" class=" namateam" data-id="10" data-type="team_2" value="">
                            <span class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>

                    </td>
                </tr>


                <tr>

                    <td class="col-md-1">
                        <div class="input-group">
                            <input type="text" name="name" class=" namateam" data-id="4" data-type="team_2" value="{{$teamInfo[5]->name}}">
                            <span class="input-group-addon"><span class="badge pull-right">0</span></span>
                        </div>
                    </td>

                </tr>

            </table>

        </div>

    </div>

</div>




{{--------------------------------------------------------------------------------------------------------------}}







</body>
</html>
@include('footer')
<style>
    #scoreIcon {
        height: 20px
    }
    .namateam {
        height:45.6px;
        width:120px
    }
    .score-icon {
        height:30px
    }
    span {
        height:20px
    }
    .diagram {

        margin-left:0px;
        margin-top:100px;
        width:800px;

    }

    .btn-outline.btn-default:hover {
        background-color: #9a9da2;
        border-color: #9a9da2;
        color: #fff;
    }
    .card__header .card-header__button {
        float: right;
    }
    .btn-outline.btn-default {
        border-color: #dbdfe6;
        color: #9a9da2;
    }
    .btn-default:hover {
        color: #fff;
        background-color: #868a91;
        border-color: transparent;
    }
    .btn:hover, .btn:focus, .btn.focus {
        color: #fff;
    }

    .card__header--has-btn > h4 {
        display: inline-block;
        margin-bottom: 0;
    }
    .card__header--has-btn > h4 {
        margin-bottom: .5em;
    }
    .card__header > h4 {

        font-size: 18px;
        line-height: 1.2em;
        letter-spacing: -0.02em;
        margin-bottom: 0;
        text-transform: uppercase;
        font-style: normal;
    }
    h4 {
        font-size: 55px;
        text-transform: none;
        font-style: normal;
    }
    h1, h2, h3, h4, h5, h6 {
        color: #31404b;
        margin: 0 0 .75em 0;
        font-weight: 700;
        text-transform: uppercase;
        font-family: "Montserrat", sans-serif;
        letter-spacing: -0.02em;
    }
    .widget__title {
        background-color:blue;
        text-transform: uppercase;
    }
    .card__header--has-btn {
        padding-top: 24px;
        padding-bottom: 24px;
    }

    .card__header--has-btn {
        background-color:blue;
        padding-top: 24px;
        padding-bottom: 24px;
    }
    .card__header {
        color:red;
        padding: 9px 24px 10px 0px;
        /*border-radius: 4px 4px 0 0;*/
        position: relative;
        border-bottom: 1px solid #e4e7ed;
        overflow: hidden;
        background-color: transparent;
    }
    .sidebar{
        width:1000px;
        margin-top:50px;
        margin-left:150px;

        /*border:solid 1px;*/
        background-color: white;
        color: black;
        font-size: 15px;
        line-height: 26px;
        font-family: "Source Sans Pro", sans-serif;
        font-weight: 400;
    }


    .col-md-4 {
        width: 33.33333333%;
    }
    .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
        float: left;
    }
    .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
        position: relative;
        min-height: 1px;
        padding-left: 8px;
        padding-right: 8px;
    }
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    body {
        color: #9a9da2;
        font-size: 15px;
        line-height: 26px;
        font-family: "Source Sans Pro", sans-serif;
        font-weight: 400;
    }
    body {
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
    }
    html {
        font-size: 10px;
    }
    html {
        font-family: sans-serif;
        -webkit-text-size-adjust: 100%;
    }



    .team-meta {
        text-align: left;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .team-meta__place {
        display: block;
        font-size: 9px;
        line-height: 1.2em;
        font-family: "Montserrat", sans-serif;
        color: #9a9da2;
    }
    .widget__title {

        width:300px;
        text-transform: uppercase;
    }

    .table > thead > tr > th, .table > thead > tr > td, .table > tbody > tr > th, .table > tbody > tr > td, .table > tfoot > tr > th, .table > tfoot > tr > td {
        padding: 13px 10px;
        font-size: 11px;
    }
    .table > thead > tr > th, .table > thead > tr > td, .table > tbody > tr > th, .table > tbody > tr > td, .table > tfoot > tr > th, .table > tfoot > tr > td {
        padding: 6.5px;
        vertical-align: top;
        border-top: 1px solid #e4e7ed;
        font-family: "Montserrat", sans-serif;
        font-size: 10px;
    }
    th {
        text-transform: uppercase;
    }
    th {
        text-align: left;
    }
    .widget--sidebar .widget__content {
        font-size: 14px;
        line-height: 22px;
        width:300px
    }
    body {
        color: #9a9da2;
        font-size: 15px;
        line-height: 26px;
        font-family: "Source Sans Pro", sans-serif;
        font-weight: 400;
    }
    .card__header .card-header__button {
        float: right;
    }

    a {
        color: #1892ed;
        text-decoration: none;
    }


</style>
<script>




</script>

