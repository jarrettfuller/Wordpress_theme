jQuery(document).ready(function($) {

  $(".carousel").owlCarousel({
    singleItem: true,
    });

    $(window).scroll(function(e) {
                     //Get first nav element
        var $nav = $('.header .nav:first');
                    // Get offset top
        var navTop = $nav.off().top;
                    //get top value
    window.console.log(navTop);
    window.console.log(scrollTop);
    });


});

