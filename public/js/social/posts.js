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
});
