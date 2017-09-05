

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
});