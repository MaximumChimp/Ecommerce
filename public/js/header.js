$(document).ready(function(){
    $("#men-page").hover(function(){
        $(".show-item-right").addClass("visible");
        
    },function(){
        $(".show-item-right").removeClass("visible");
    });
    $(".show-item-right").hover(function(){
        $(this).addClass("visible");
        
    },function(){
        $(".show-item-right").removeClass("visible");
    });

    $("#profile").hover(function(){
        $("#profile i").css({"color":"blue"})
    },function(){
        $("#profile i").css({"color":"black"})
    })

    $("#wishlist").hover(function(){
        $("#wishlist i").css({"color":"tomato"})
    },function(){
        $("#wishlist i").css({"color":"black"})
    })

    $("#shopping-bag").hover(function(){
        $("#shopping-bag i").css({"color":"brown"})
    },function(){
        $("#shopping-bag i").css({"color":"black"})
    })
});