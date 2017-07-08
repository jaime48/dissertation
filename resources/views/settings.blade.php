<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<html>
<head>
</head>
<body>
@include('navi')
<script  src="{{asset('js/bootstrapvalidator.min.js')}}"></script>
<script  src="{{asset('js/settings.js')}}"></script>
<br><br><br>
{{--<div class="col-md-12 col-md-offset-3">--}}
<form name="setting" method="post" action="settings" id="settings" class="form-horizontal">
    {{ csrf_field() }}
    <h2>Account Settings</h2>
    <table id="table" border="3px" cellpadding="30" width="700px" class="mainTable">
        <tr>
            <td width="20%">First Name</td>
            <td width="50%">
                <input type="text" name="first_name" id="first_name" value="{{$first_name}}" readonly="readonly">
                <div hidden="hidden" id="new_first_name" style="align-content: center">
                    <div class="form-group">
                        first_name<input name="new_first_name" class="changePassword"><br>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" >Save <span class="glyphicon glyphicon-send"></span></button>
                    <button type="button" class="btn btn-save btn-sm" onclick="cancelEdit('first_name')" >Cancel <span class="glyphicon glyphicon-warning"></span></button>
                </div>
            </td>
            <td align="left" width="30%"> <a class="edit ml10" href="javascript:edit('first_name')" title="Edit">
                    <i class="glyphicon glyphicon-edit"></i>
                </a></td>
        </tr>
        <tr>
            <td width="20%">Last Name</td>
            <td width="50%">
                <input type="text" name="last_name" id="last_name" value="{{$last_name}}" readonly="readonly">
                <div hidden="hidden" id="new_last_name" style="align-content: center">
                    <div class="form-group">
                        Last name<input name="new_last_name" class="changePassword"><br>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" >Save <span class="glyphicon glyphicon-send"></span></button>
                    <button type="button" class="btn btn-save btn-sm" onclick="cancelEdit('last_name')" >Cancel <span class="glyphicon glyphicon-warning"></span></button>
                </div>
            </td>
            <td align="left" width="30%"> <a class="edit ml10" href="javascript:edit('last_name')" title="Edit">
                    <i class="glyphicon glyphicon-edit"></i>
                </a></td>
        </tr>
        <tr>
            <td width="20%">Phone</td>
            <td width="50%">
                <input type="text" name="phone" id="phone" value="{{$phone}}" readonly="readonly">
                <div hidden="hidden" id="new_phone" style="align-content: center">
                    <div class="form-group">
                        Phone<input name="new_phone" class="changePassword"><br>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" >Save <span class="glyphicon glyphicon-send"></span></button>
                    <button type="button" class="btn btn-save btn-sm" onclick="cancelEdit('phone')" >Cancel <span class="glyphicon glyphicon-warning"></span></button>
                </div>
            </td>
            <td align="left" width="30%"> <a class="edit ml10" href="javascript:edit('phone')" title="Edit">
                    <i class="glyphicon glyphicon-edit"></i>
                </a></td>
        </tr>
        <tr>
            <td width="20%">Address</td>
            <td width="50%">
                <input type="text" name="address" id="address" value="{{$address}}" readonly="readonly">
                <div hidden="hidden" id="new_address" style="align-content: center">
                    <div class="form-group">
                        Address<input name="new_address" class="changePassword"><br>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" >Save <span class="glyphicon glyphicon-send"></span></button>
                    <button type="button" class="btn btn-save btn-sm" onclick="cancelEdit('address')" >Cancel <span class="glyphicon glyphicon-warning"></span></button>
                </div>
            </td>
            <td align="left" width="30%"> <a class="edit ml10" href="javascript:edit('address')" title="Edit">
                    <i class="glyphicon glyphicon-edit"></i>
                </a></td>
        </tr>
        <tr>
            <td width="20%">City</td>
            <td width="50%">
                <input type="text" name="city" id="city" value="{{$city}}" readonly="readonly">
                <div class="form-group">
                    <div hidden="hidden" id="new_city" style="align-content: center">

                        <div class="form-group">
                            City<input name="new_city" class="changePassword"><br>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm" >Save <span class="glyphicon glyphicon-send"></span></button>
                        <button type="button" class="btn btn-save btn-sm" onclick="cancelEdit('city')" >Cancel <span class="glyphicon glyphicon-warning"></span></button>
                    </div>
                </div>
            </td>
            <td align="left" width="30%"> <a class="edit ml10" href="javascript:edit('city')" title="Edit">
                    <i class="glyphicon glyphicon-edit"></i>
                </a></td>
        </tr>
        <tr>
            <td width="20%">Zip Code</td>
            <td width="50%">
                <input type="text" name="zip" id="zip" value="{{$zip}}" readonly="readonly">
                <div hidden="hidden" id="new_zip" style="align-content: center">
                    <div class="form-group">
                        Zip Code<input name="new_zip" class="changePassword"><br>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" >Save <span class="glyphicon glyphicon-send"></span></button>
                    <button type="button" class="btn btn-save btn-sm" onclick="cancelEdit('zip')" >Cancel <span class="glyphicon glyphicon-warning"></span></button>
                </div>
            </td>
            <td align="left" width="30%"> <a class="edit ml10" href="javascript:edit('zip')" title="Edit">
                    <i class="glyphicon glyphicon-edit"></i>
                </a></td>
        </tr>


        <tr>
            <td width="20%">Password</td>
            <td width="50%">
                <input type="text" name="pass" value="*******" readonly="readonly" id="pass">
                <div hidden="hidden" id="new_pass" style="align-content: center">
                    <div class="form-group">
                        Current<input name="currentPassword" class="changePassword" type="password"><br>
                    </div>
                    <div class="form-group">
                        New &nbsp;&nbsp;&nbsp;&nbsp;<input name="new_pass" class="changePassword" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" ><br>
                    </div>
                    <div class="form-group">
                        Confirm<input name="confirmPassword" class="changePassword" type="password"><br>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" >Save <span class="glyphicon glyphicon-send"></span></button>
                    <button type="button" class="btn btn-save btn-sm" onclick="cancelEdit('pass')" >Cancel <span class="glyphicon glyphicon-warning"></span></button>
                </div>
            </td>
            <td align="left" width="30%"> <a class="edit ml10" href="javascript:edit('pass')" title="Edit">
                    <i class="glyphicon glyphicon-edit"></i>
                </a></td>
        </tr>
    </table>
</form>
</div>

</body>
</html>
@include('footer')
<style>
    form {
        margin: 0 0 100 400;

    }
    img {
        opacity: 0.1;
        filter: alpha(opacity=10); /* For IE8 and earlier */
    }
    table, th, td {
        border-left: none;
        border-right: none;
    }
    .ml10 {
        margin-left: 10px;
    }
    .hiddenTag {
        color:white;
    }
    td {
        padding: 10px;
    }
    input:not(.changePassword){
        width:300px;
        align-items: center;
        outline:none;
        border: 0px solid;
        text-align: center;
    }
    input[class=changePassword]{
        margin: 10px;



    }
    button{
        margin-left:10px;
    }
    .mainTable{
        color:#333;
        font-size: 15px;

    }
</style>

{{--<input name="fb_dtsg" value="AQGWa_WM_XYY:AQHzL62BMNNr" autocomplete="off" type="hidden"><div class="mam fbSettingsEditorLabel" tabindex="-1"><strong>Password</strong></div><div class="pbm fbSettingsEditorFields"><div class="ptm"><table class="uiInfoTable uiInfoTableFixed noBorder" role="presentation"><tbody><tr class="hidden_elem dataRow"><th class="label noLabel"></th><td class="data"><input class="inputtext" name="password_strength" id="password_strength" type="text"></td></tr><tr class="dataRow"><th class="label"><label for="password_old">Current</label></th><td class="data"><input class="inputtext" name="password_old" id="password_old" type="password"></td></tr><tr><th class="label noLabel"></th><td class="data"><div id="password_old_status"><span>&nbsp;</span></div></td></tr><tr class="dataRow"><th class="label"><label for="password_new">New</label></th><td class="data"><input class="inputtext" name="password_new" id="password_new" autocomplete="off" aria-describedby="password_new_status" type="password"></td></tr><tr><th class="label noLabel"></th><td class="data"><div id="password_new_status">&nbsp;<span class="accessible_elem">Check the help tag for password feedback</span></div></td></tr><tr class="dataRow"><th class="label"><label for="password_confirm">Retype new</label></th><td class="data"><input class="inputtext" name="password_confirm" id="password_confirm" autocomplete="off" aria-describedby="password_confirm_status" type="password"></td></tr><tr><th class="label noLabel"></th><td class="data"><div id="password_confirm_status">&nbsp;<span class="accessible_elem">Check the help tag for password feedback</span></div></td></tr><tr><td colspan="2"><a href="https://www.facebook.com/recover/initiate?ref=www_change_password">Forgotten your password?</a></td></tr></tbody></table></div><div class="mtm uiBoxGray topborder"><div class="mtm"><label class="submit uiButton uiButtonConfirm" id="u_1n_0" for="u_1n_1"><input value="Save Changes" id="u_1n_1" type="submit"></label><label class="cancel uiButton" for="u_1n_2"><input value="Cancel" id="u_1n_2" type="button"></label><img class="mas saveThrobber uiLoadingIndicatorAsync img" src="https://www.facebook.com/rsrc.php/v3/yb/r/GsNJNwuI-UM.gif" alt="" width="16" height="11"></div></div></div>--}}

<script>
    function changePassword(){
        $('#changePassword').show();
        $('#password').hide();
    };

    function edit(columnName){
        $('#'+columnName).hide();
        $('#new_'+columnName).show();

    }

    function cancelEdit(columnName){
        $('#new_'+columnName).hide();
        $('#'+columnName).show();
    }

</script>