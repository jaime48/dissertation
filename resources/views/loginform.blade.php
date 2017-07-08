
<script src="{{asset('js/bootstrap.js')}}"></script>
<link href="{{asset('css/loginform.css')}}" rel="stylesheet">
<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <img class="img-circle" id="img_logo" src="{{asset('images/logo.png')}}">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>

            <!-- Begin # DIV Form -->
            <div id="div-forms">

                <!-- Begin # Login Form -->
                <form id="login-form">
                    <div class="modal-body">
                        <div id="div-login-msg">
                            <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-login-msg">Type your username and password.</span>
                        </div>
                        <input id="login_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                        <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="remember_me"> Remember me
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                        </div>
                        <div>
                            <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                    </div>
                </form>
                <!-- End # Login Form -->

                <!-- Begin | Lost Password Form -->
                <form id="lost-form" style="display:none;">
                    <div class="modal-body">
                        <div id="div-lost-msg">
                            <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-lost-msg">Type your e-mail.</span>
                        </div>
                        <div>
                        <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                        </div>

                            <div id="div-verification-msg">
                            <div id="icon-verification-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="verification-msg">Enter verification code</span>
                        </div>
                        <div>
                        <input id="verificationCode" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                            <button type="button" class="btn btn-primary" id="verificationSubmit" data-toggle="button" aria-pressed="false" autocomplete="off">Send Code</button>

                        </div>
                            <div id="div-new-password">
                            <div id="icon-new-password" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-new-password">Type your new password.</span>
                        </div>
                        <input id="new_password" class="form-control" type="password" placeholder="type your new password" required>
                        <div id="div-lost-msg">
                            <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-lost-msg">Confirm your new password</span>
                        </div>
                        <input id="confirm_new_password" class="form-control" type="password" placeholder="confirm your new password" required>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                        </div>
                        <div>
                            <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                            <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                    </div>
                </form>
                <!-- End | Lost Password Form -->
            </div>
            <!-- End # DIV Form -->

        </div>
    </div>
</div>

<!-- END # MODAL LOGIN -->
