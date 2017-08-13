function sendMessage(){
    $('#sendMessage').modal('show');
}



$(document).ready(function(){
    $(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
    });

    $(".dropdown-toggle").click(function(event){
        console.log(event);
        $handle =  $(event.target).nextAll('.dropdown-menu').find('.notifications-wrapper');
        refreshComments($handle,$(event.target).find("input").val());
    });

    function refreshComments($handle,$post_id) {

        $.ajax({
            method:'GET',
            url:'getComments',
            data:{'post_id':$post_id}
        }).done(function(msg){
            $handle.empty();
            $.each(msg,function(key,value){
                $handle.append('<a class="content"><div class="notification-item-read"><h4 class="item-title">'+value.users.first_name+' '+value.users.last_name+' | '+value.created_at+' </h4> <p class="item-info">'+value.content+'</p> </div> </a>');
            })
        });
    }

    $(document).on('click','#submitComment',function(event) {
        $post_id = $(event.target).parent().parent().prevAll("a").find("input").val();
        $(event.target).parent().parent().prevAll("a").find('span').text(parseInt($(event.target).parent().parent().prevAll("a").find('span').text())+1);
        $post_content = $(event.target).prevAll("textarea").val();
        $.ajax({
            async: false,
            method: 'GET',
            url: 'submitComment',
            data: {'post_id': $post_id, 'comment': $post_content}
        }).done(function () {
            refreshComments( $(event.target).parent().parent().find('.notifications-wrapper'),$post_id);
        });
    })



    $(document).on('click','.likeOrDislike', function(e){
        $post_id = $(e.target).parent().parent().parent().find("a").find("input").val();

        if($(e.target).attr("class") == "glyphicon glyphicon-thumbs-up"){
            $likeOrDislike = 1;
        }
        if($(e.target).attr("class") == "glyphicon glyphicon-thumbs-down"){
            $likeOrDislike = 0;
        }
        $.ajax({
            async:false,
            method:'GET',
            url:'likeOrDislike',
            data:{'post_id':$post_id, 'likeOrDislike': $likeOrDislike}
        }).done(function(msg){
            console.log($(e.target).next('span'));
            //$(e.target).next('span').text(parseInt($(e.target).next('span').text())+1);
            if(msg==0){
                return;
            }else{
                $(e.target).next('span').text()=='' ? $num = 0 : $num = parseInt($(e.target).next('span').text());
                $(e.target).next('span').text($num+1);
            }
        });
    })

});
