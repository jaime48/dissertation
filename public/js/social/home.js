

$(document).ready(function() {
    $(".btn-pref .btn").click(function () {
        $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
        // $(".tab").addClass("active"); // instead of this do the below
        $(this).removeClass("btn-default").addClass("btn-primary");
    });

});

$(document).on('click','.edit',function(e){
    $(e.target).parent().parent().prevAll('td').find('div').show();

});

$(document).on('click','.cancel',function(e){
    $(e.target).parent().hide();
});



$(document).ready(function() {
    $("#avatar_link").click(function(){
        $('#editAvatar').modal('show');
    });
});

$(document).on('click','.seeProfile',function(event) {

    $friend_id = $(event.target).parent().prevAll("span").text();
    console.log($friend_id);
    window.location = '/seeProfile?friend_id=' + $friend_id;

});

$(document).on('click','.unfriend',function(event) {

    $friend_id = $(event.target).parent().prevAll("span").text();
    console.log($friend_id);
    $('#deleteModal').modal().show().on('click','#confirmDelete',function(){
        $('#deleteModal').hide();
        $.ajax({
            method: 'GET',
            url: 'unfriend',
            data:{id:$friend_id}
        }).done(function(msg){
            if(msg==1){
                window.location.href='social.home?tab=2';
            }else{
                alert('delete failed');
            }
        });
    });

});

$(document).on('click','.addGroupMembers',function(event) {
    $group_id = $(event.target).parent().prevAll("span").text();
    $('#addedToGroupId').val($group_id);
    $.ajax({
        url: 'addableFriendsForGroup',
        method:'GET',
        data:{'group_id':$group_id}
    }).done(function(msg){
        console.log(msg);
        $.each(msg, function(key, value) {
            $('#addMembers').append(new Option(value.users.first_name+' '+value.users.last_name, value.users.id));
        });
        $('#addMembers').chosen({width:"50%"});
        $('#addmembersModal').modal().show()
    });
});

$(document).on('click','.deleteGroup',function(event) {

    $group_id = $(event.target).parent().prevAll("span").text();
    console.log($group_id);
    $('#deleteGroupModal').modal().show().on('click','#confirmDeleteGroup',function(){
        $('#deleteGroupModal').hide();
        $.ajax({
            method: 'GET',
            url: 'deleteGroup',
            data:{id:$group_id}
        }).done(function(msg){
            if(msg==1){
                window.location.href='social.home?tab=3';
            }else{
                alert('delete failed');
            }
        });
    });

});

$(document).on('click','.leaveGroup',function(event) {
    $group_id = $(event.target).parent().prevAll("span").text();
    $.ajax({
        method: 'GET',
        url: 'leaveGroup',
        data:{id:$group_id}
    }).done(function(msg){
        if(msg==1){
            window.location.href='social.home?tab=3';
        }else{
            alert('delete failed');
        }
    });
});

$(document).on('click','.messageSend',function(event){
    $text = $(event.target).parent().parent().find('td').find('input').val();
        $group_id = $(event.target).prevAll('input[name="decide"]').val();
    $friend_id = $(event.target).prev('input').val();
    console.log($group_id);
    console.log($friend_id);
    if($group_id){
        $data ={'msg':$text,'group_id':$group_id};
        $.ajax({
            url:'sendGroupMessage',
            method:'GET',
            data:$data
        }).done(function(){
            $.ajax({
                async:false,
                url:'getGroupMsg',
                method:'GET',
                data:{'group_id':$group_id}
            }).done(function(data){
                showMessage(data);

            });

        });
    }else{
        $data ={'msg':$text,'to_id':$friend_id};
        $.ajax({
            url:'sendMessage',
            method:'GET',
            data:$data
        }).done(function(){
            $.ajax({
                async:false,
                url:'getMessages',
                method:'GET',
                data:{'friend_id':$friend_id}
            }).done(function(data){
                showMessage(data);

            });

        });
    }

        //console.log($friend_id);

});

function refreshMessage(){

}

function showMessage(data) {
    $('#messageUl').empty();
    $.each(data, function(key, value) {
        if(value.direction == 'to'){
            $('#messageUl').append(
                '<li>      ' +
                '<div class="row msg_container base_sent"> ' +
                '<div class="col-md-10 col-xs-10"> ' +
                '<div class="messages msg_sent"> ' +
                '<p>'+value.text+'</p> ' +
                '<time datetime="2009-11-13T20:00">'+value.name+' • '+value.created_at+'</time> ' +
                '</div> </div> ' +
                '<div class="col-md-2 col-xs-2 avatar"> ' +
                '<img src="'+$path+'/'+value.avatar+'" class=" img-responsive " style="width:41px;height:41px"> ' +
                '</div> </div> ' +
                '</li>'
            );
        }else{
            $('#messageUl').append(
                '<li>      ' +
                '<div class="row msg_container base_sent"> ' +
                '<div class="col-md-2 col-xs-2 avatar"> ' +
                '<img src="'+$path+'/'+value.avatar+'" class=" img-responsive " style="width:41px;height:41px"> ' +
                '</div>' +
                '<div class="col-md-10 col-xs-10"> ' +
                '<div class="messages msg_sent"> ' +
                '<p>'+value.text+'</p> ' +
                '<time datetime="2009-11-13T20:00">'+value.name+' • '+value.created_at+'</time> ' +
                '</div> </div> ' +
                '</div> ' +
                '</li>'
            );
        }

    });
}


var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

$(document).ready(function(){
    var tab = getUrlParameter('tab');
    if(tab == 2){
        $( "#favorites" ).trigger( "click" );
    }
    if(tab == 3){
        $( "#following" ).trigger( "click" );
    }
});