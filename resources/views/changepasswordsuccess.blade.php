<!--------------------------------import source---------------------------------------->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/registersuccess.css')}}" rel="stylesheet">
<!---------------------------------import source--------------------------------------->

<html>
<body>
@include('navi')
<div class="container registersuccess">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="alert-message alert-message-success">
                <h4 align="center" style="font-size:24px;">
                    Password reset successful</h4>
                <p align="center" style="font-size:16px;">
                    Welcome to ProSports, now create your own astonishing experience !&nbsp;  <strong>
                        <a href="http://www.jquery2dotnet.com/2013/07/cool-notification-css-style.html">
                            Please login in</a></strong></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

@include('footer')