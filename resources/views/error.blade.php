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
            <div class="alert-message alert-message-warning">
                <h4 align="center">
                   ERROR</h4>
                <p align="center">
                     <strong> <?php print_r($error) ?>
                        </strong></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

@include('footer')