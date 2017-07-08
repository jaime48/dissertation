<!--------------------------------------------------------------------->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<!---------------------------------------------------------------------->
<html>
<body>

@include('navi')
<script  src="{{asset('js/bootstrapValidator.min.js')}}"></script>
<script  src="{{asset('js/register.js')}}"></script>
<!-- register form -->

<br><br><br>
<div id="background">

<form class="form-horizontal" action="registersuccess" method="post" id="reg_form">
    {{ csrf_field() }}
    <fieldset>

        <!-- Form Name -->
        <legend> Personal Information

        </legend>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">First Name</label>
            <div class="col-md-4  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label" >Last Name</label>
            <div class="col-md-4  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">User Type</label>
            <div class="col-md-4 selectContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="user_type" class="form-control selectpicker" >
                        <option value="" >Please select your identity</option>
                        <option value="1">Player</option>
                        <option value="2">Coach</option>
                        <option value="3"> Team Manager</option>
                        <option value="4"> League Manager</option>
                    </select>
                </div>
            </div>
        </div>


        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Phone #</label>
            <div class="col-md-4  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input name="phone" placeholder="4407754263103" class="form-control" type="text">
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Address</label>
            <div class="col-md-4  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input name="address" placeholder="Address" class="form-control" type="text">
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">City</label>
            <div class="col-md-4  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input name="city" placeholder="city" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Zip Code</label>
            <div class="col-md-4  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <!-- Text area -->

        <div class="form-group">
            <label class="col-md-4 control-label">About </label>
            <div class="col-md-4  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                    <textarea class="form-control" name="comment" placeholder="About "></textarea>
                </div>
            </div>
        </div>


    </fieldset>
    <legend> Account information </legend>
    <fieldset>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label">E-Mail</label>
            <div class="col-md-4  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="email" id="email" placeholder="E-Mail Address" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Verification Code</label>
            <div class="col-md-4  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="verificationCode" id="verificationCode" placeholder="type in verification code" class="form-control"  type="text"> <button type="button" class="btn btn-primary" id="verifyButton"  >Send <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>
        </div>

        <div class="form-group has-feedback">
            <label for="password"  class="col-md-4 control-label">
                Password
            </label>
            <div class="col-md-4  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input class="form-control" id="userPw" type="password" placeholder="password"
                           name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}",data-minLength="5",
                           data-error="some error", title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                           required/>
                    <span class="glyphicon form-control-feedback"></span>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
        </div>

        <div class="form-group has-feedback">
            <label for="confirmPassword"  class="col-md-4 control-label">
                Confirm Password
            </label>
            <div class="col-md-4  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input class="form-control {$borderColor}" id="userPw2" type="password" placeholder="Confirm password"
                           name="confirmPassword" data-match="#confirmPassword" data-minLength="5"
                           data-match-error="some error 2"
                           required/>
                    <span class="glyphicon form-control-feedback"></span>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
        </div>


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
            </div>
        </div>
    </fieldset>
</form>
</div>
</body>
</html>
<!-----------------------footer--------------------------->
@include('footer')
<!------------------------------------------------------------>
<style>

#verifyButton {
    display:inline-block;
}
#verificationCode {
        display:inline-block;
        width:370px;
    }

</style>