$(function(){

    $barsIcon = $(".bars-icon");
    $postMenu = $(".post-menu");

    $(document).on("click", function(e){

        if($(e.target).closest(".post-menu").length < 1 && $(e.target).closest(".bars-icon").length < 1){

            $postMenu.removeClass("on");
            $barsIcon.addClass("on");

        }else if($(e.target).closest(".bars-icon").length > 0){

            $postMenu.removeClass("on");
            $barsIcon.addClass("on");
    
            $(e.target).removeClass("on");
            $(e.target).closest(".post").find(".post-menu").addClass('on');

        }
    });
});