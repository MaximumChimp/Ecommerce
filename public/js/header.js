$(document).ready(function(){
    $("#men-page").hover(function(){
        $("#men-item").addClass("visible");
        
    },function(){
        $("#men-item").removeClass("visible");
    });
    $("#woman-page").hover(function(){
        $("#women-item").addClass("visible");
        
    },function(){
        $("#women-item").removeClass("visible");
    });
    $("#kids-page").hover(function(){
        $("#kids-item").addClass("visible");
        
    },function(){
        $("#kids-item").removeClass("visible");
    });
    $("#homeAndLiving-page").hover(function(){
        $("#homeandliving-item").addClass("visible");
        
    },function(){
        $("#homeandliving-item").removeClass("visible");
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