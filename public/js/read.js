$(document).ready(function(){
    $(".fa-cart-arrow-down").click(function(){
        $(".cart-body").slideToggle(1000);
    });
});

$(document).ready(function(){
 $(".comment-form .fa-share").click(function(){
        $("comment-form .share").slideToggle(500);
    });
});