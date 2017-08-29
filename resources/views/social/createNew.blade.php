<link href="{{asset('css/social/fileinput.min.css')}}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{asset('css/round-about.css')}}" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Round About - Start Bootstrap Template</title>



    <![endif]-->

</head>

<body>

<!-----------------------navigation--------------------------->
@include('navi')
@include('social.sidebar')
<script src="{{asset('js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('js/social/fileinput.min.js')}}"></script>
<script src="{{asset('js/social/plugins/piexif.js')}}"></script>
<script src="{{asset('js/social/plugins/sortable.js')}}"></script>

<!------------------------------------------------------------>
<div style="margin-top:100px;margin-left:400px;min-height:500px;width:1000px">
    <legend>Create a  post</legend><hr>
    <form name="createPost" action="social.createPostSubmit" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="row">
            <label class="col-md-3 control-label" for="Name">upload image or video</label>
            <div class="col-md-6">
                <input id="post" name="post" type="file" class="file" data-preview-file-type="text" required>

            </div>

        </div>
        <br><br><br>
        <div class="row">
            <label class="col-md-3 control-label" for="Name">Title</label>
            <div class="col-md-6">
                <input id="title" name="title" type="text" class="form-control input-sm" style="width:200px" required>

            </div>
        </div><br><br>
        <div class="row">
            <label class="col-md-3 control-label" for="Name">Content</label>
            <div class="col-md-6">
                <textarea id="text" name="text" type="text" class="form-control input-md" required></textarea>

            </div>

        </div>
        <br><br>
        <div class="row">
            <label class="col-md-3 control-label" for="Name"></label>
            <div class="col-md-6">
                <button id="submit" name="submit" class="btn btn-success">Submit</button>
                </div>


            </div>
    </form>
        </div>

</div>
</body>
</html>
<!-----------------------footer--------------------------->
@include('footer')
<!------------------------------------------------------------>
<style>
    .img-circle {
        width: 200px;
        height: 200px;
    }
    .comment-dropdown{
        position:relative;
    }
    .shadow{

        background-color: #FFFFFF;
        padding:10px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius:4px;
        box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.3);
    }
    .shadow:hover{
        box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 6px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
        color:black;
    }
</style>

<script>



    // with plugin options
    $("#post").fileinput({'showUpload':true, 'previewFileType':'any'});
</script>