
function setRead($id) {

    $.ajax({
        url:'setRead',
        method:'GET',
        data:{id:$id}
    }).done(function(){
        refreshNoti();
    })
}

function questionnaire(){
    $.ajax({
        url:'dupCheck',
        method:'GET'
    }).done(function(msg){
        if(msg==0){
            window.location='questionnaire';
        }else{
            $('#questionnaireAlert').modal('show');
        }
    });
}

function refreshNoti() {
    $.ajax({
        method:'GET',
        url:'getNotifications'
    }).done(function(msg){
        console.log(msg);
        if(msg==0){
            $('#badge-notify').remove();
            return;
        }
        if(msg.countNotRead==0){
            $('#badge-notify').remove();
        }else{
            $('#badge-notify').remove();
            $('#notiIcon').append(' <span class=\'badge\' id="badge-notify" style="align-content:left">'+msg.countNotRead+'</span>');

        }
        $('#notiWrapper').empty();
        $.each(msg.notifications,function(key,value){
            if(value.is_read==0){
                $('#notiWrapper').append('<a class="content" href="javascript:setRead('+value.id+')"><div class="notification-item"><h4 class="item-title">'+value.title+' ·  '+value.created_at+' </h4> <p class="item-info">'+value.content+'</p> </div> </a>');
            }else{
                $('#notiWrapper').append('<a class="content" href="javascript:setRead('+value.id+')"><div class="notification-item-read"><h4 class="item-title">'+value.title+' ·  '+value.created_at+' </h4> <p class="item-info">'+value.content+'</p> </div> </a>');
            }

        })
    });
}

// request
refreshRequests();
function refreshRequests() {
    $.ajax({
        method:'GET',
        url:'getRequests'
    }).done(function(msg){
        console.log(msg);
        if(msg==0){
            $('#badge-requests').remove();
            return;
        }
        if(msg.num==0){
            $('#badge-requests').remove();
        }else{
            $('#badge-requests').remove();
            $('#requestsIcon').append(' <span class=\'badge\' id="badge-requests" style="align-content:left">'+msg.num+'</span>');

        }
        $('#requestsWrapper').empty();
        $.each(msg.requests,function(key,value){
            if(value.status!='undecided'){
                $('#requestsWrapper').append('<a class="content" href="javascript:setRead('+value.id+')">' +
                    '<div class="notification-item-read">' +
                    '<div class="col-md-12">'+
                    '<div class="col-md-6">'+
                    '<h4 class="item-title">'+'friend requests'+' ·  '+value.created_at+' </h4> ' +
                    '<p class="item-info">'+value.users.first_name+' '+value.users.last_name+'</p> ' +
                    '</div>' +
                    '<div class="col-md-6" style="text-align:right"><br>' +
                    '<span hidden="hidden">value</span>' +
                    value.status+
                    '</div>' +
                    '</div>' +
                    '</div>'+
                    ' </a>');
            }else{
            $('#requestsWrapper').append('<a class="content" href="#">' +
                '<div class="notification-item-read">' +
                '<div class="col-md-12">'+
                '<div class="col-md-6">'+
                '<h4 class="item-title">'+'friend requests'+' ·  '+value.created_at+' </h4> ' +
                '<p class="item-info">'+value.users.first_name+' '+value.users.last_name+'</p> ' +
                '</div>' +
                '<div class="col-md-6" style="text-align:right"><br>' +
                '<span hidden="hidden">'+value.id+'</span>' +
                '<button class="btn btn-success btn-sm confirmRequest" >confirm</button>&nbsp;' +
                '<button class="btn btn-default btn-sm declineRequest">decline</button>' +
                '</div>' +
                '</div>' +
                '</div>'+
                ' </a>');
             }

        })
    });
}

$(document).on('click','.confirmRequest',function(e){
    $id = $(e.target).prev('span').text();
    console.log($id);
    $.ajax({
        url:'acceptFriend',
        method:'GET',
        data:{'id':$id}
    }).done(function(){
        refreshRequests();
    });

});

$(document).on('click','.declineRequest',function(e){
    $id = $(e.target).prevAll('span').text();
    console.log($id);
    $.ajax({
        url:'declineFriend',
        method:'GET',
        data:{'id':$id}
    }).done(function(){
        refreshRequests();
    });

});

/////////////////////////////////////////////////////////////////////////////////////////////
function setAllRead() {

    $.ajax({
        url:'setRead',
        method:'GET',
    }).done(function(){
        refreshNoti();
    })
}

$(document).ready(function(){


    var loginStatus = false;
    var userName;
    $.ajax({
        async:false,
        method:'GET',
        url:'getSession'
    }).done(function(msg){
        if(!(msg==null || msg=='')){
            userName = msg;
            loginStatus = true;
        }
    });

    $(document).on('click', '#notiDropDown', function (e) {
        e.stopPropagation();
    });
    $(document).on('click', '#requestsDropDown', function (e) {
        e.stopPropagation();
    });
    $(document).on('click', '#messagesDropDown', function (e) {
        e.stopPropagation();
    });


    refreshNoti();
    setInterval(refreshNoti, 3* 1000);
    setInterval(refreshRequests, 3* 1000);



    var $newdiv1 = $(" \<li class=\"dropdown\" id=\"#loginin\">\
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" id=\"loginedIn\"><span id=\"loginUser\">123<span></a> <ul class=\"dropdown-menu\">\
                    <li>\
                    <a href=\"settings\">Account Setting</a>\
                            </li>\
                            <li>\
                            <a href=\"#\" id=\"logOut\">Log out</a>\
                            </li>\
                          </ul>\
                    </li>");

    var $newdiv2 = $('\<li>\<a href=\"#\" id="loginpop">Log in</a>\</li>');

    if(loginStatus==true) {
        $('#ul').append($newdiv1);
        $('#loginUser').text('Hello,'+userName);
        $('#loginUser').append('<b class=\"caret\"></b>');

    }else{
        $('#ul').append($newdiv2);
    }

    $('#lost_register_btn').click( function () { window.location.replace("register")});
    $('#login_register_btn').click( function () { window.location.replace("register")});

    var $formLogin = $('#login-form');
    var $formLost = $('#lost-form');
    var $divForms = $('#div-forms');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    $('#loginpop').click(function(){

        $formLogin.trigger('reset');
        $formLost.trigger('reset');
        $formLogin.show();
        //$('#login-modal').height($formLogin.height());
        $formLost.hide();

        $divForms.height('270');
        $('#login-modal').modal('show');
        //modalAnimate($formLost, $formLogin);
        //$formRegister.hide();


    });

    $("#login-form").submit(function () {
        var $lg_username=$('#login_username').val();
        var $lg_password=$('#login_password').val();
        var $remember_me=$('#remember_me').is(":checked");
        $.ajax({
            method:"GET",
            url: "login",
            data:{email:$lg_username,password:$lg_password,rememberMe:$remember_me}
        }).done(function(msg){
            if(msg==0){
                msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error,please check your input");
            }else{
                msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login successful,redirecting...");
                setTimeout(function(){
                    window.location.href='/';
                },0);

            }
        });
        return false;
    });
    var verificationCode='123';
    $('#verificationSubmit').click(function(){
        var $ls_email=$('#lost_email').val();
        var $_confirm_email=$('#confirm_lost_email').val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test($ls_email)){
            msgChange($('#verification-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Please enter valid email address")
            return false;
        }

        $.ajax({
            async:false,
            method:'GET',
            url:'sendVerificationCode',
            data:{email:$ls_email}
        }).done(function(msg){
            verificationCode = msg;
            if (msg==0) {
                msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", " Email address doesn't exist");
                return false;
            }
            msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "glyphicon-ok", "Email sent with your new password");
            var counter = 5;
            setInterval(function() {
                if (counter >= 0) {
                    $('#verificationSubmit').attr("disabled", true).text('resend in '+counter+'s');
                }
                if (counter === 0) {
                    $('#verificationSubmit').attr("disabled", false).text('resend');
                }
                counter--;
            }, 1000);
        });


    });

    $("#lost-form").submit(function () {
        var $ls_email=$('#lost_email').val();
        var $_confirm_email=$('#confirm_lost_email').val();
        var $new_password = $('#new_password').val();
        var $confirm_new_password = $('#confirm_new_password').val();
        var $verify = $('#verificationCode').val();
        // alert($verify);
        // alert(verificationCode);
        if ($verify != verificationCode) {
            msgChange($('#div-verification-msg'), $('#icon-verification-msg'), $('#verification-msg'), "error", "glyphicon-remove", "Verification code is wrong");
            return false;
        }
        var regex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
        if(!regex.test($new_password)){
            msgChange($('#div-new-password'), $('#icon-new-password'), $('#text-new-password'), "error", "glyphicon-remove", "Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters")
            return false;
        }
        if($new_password !=  $confirm_new_password){
            msgChange($('#div-new-password'), $('#icon-new-password'), $('#text-new-password'), "error", "glyphicon-remove", "Password must be the same")
            return false;
        }
        $.ajax({
            async:false,
            method:'GET',
            url:'changePassword',
            data:{email:$ls_email,password:$new_password}
        }).done(function(msg){
            if (msg==0) {
                msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", " Email address doesn't exist");
                return false;
            }

        });
        window.location.href='changepasswordsuccess';
    });

    //$('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
    //$('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
    $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
    $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });

    //$('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });

    function modalAnimate ($oldForm, $newForm) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height",$oldH);
        $oldForm.fadeToggle($modalAnimateTime, function(){
            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }

    function msgFade ($msgId, $msgText) {
        $msgId.fadeOut($msgAnimateTime, function() {
            $(this).text($msgText).fadeIn($msgAnimateTime);
        });
    }

    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
        var $msgOld = $divTag.text();
        msgFade($textTag, $msgText);
        $divTag.addClass($divClass);
        $iconTag.removeClass("glyphicon-chevron-right");
        $iconTag.addClass($iconClass + " " + $divClass);
        setTimeout(function() {
            msgFade($textTag, $msgOld);
            $divTag.removeClass($divClass);
            $iconTag.addClass("glyphicon-chevron-right");
            $iconTag.removeClass($iconClass + " " + $divClass);
        }, $msgShowTime);
    }

    $(document).on('click','#logOut',function(){
        $.ajax({
            method: 'GET',
            url : 'clearSessionCookie'
        }).done(function(){
            window.location.href='/';
        });
    });




});
