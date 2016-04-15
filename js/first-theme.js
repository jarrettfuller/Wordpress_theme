jQuery(document).ready(function($) {

  $(".carousel").owlCarousel({
    singleItem: true,
    });

     $('#drawer-toggle, #drawer-close').click(function(e) {
    e.preventDefault();
    $('.header .drawer').toggleClass('open');
  });

  var originalTop = 0;

  $(window).scroll(function(e) {

    if($(window).width() >= 800) {

        // Get the first drawer element
        var $drawer = $('.header .drawer:first');

        // Get the offset top value for the drawer
        var drawerTop = $drawer.offset().top;

        // Get the scrolltop value
        var scrollTop = $(window).scrollTop();

        // Make navigation sticky
        if(!$drawer.hasClass('sticky')) {

          if(scrollTop >= drawerTop) {
            originalTop = drawerTop;
            $drawer.addClass('sticky');
            $('body').css('padding-top', $drawer.height());
          }

        } else {

          if(originalTop >= scrollTop) {
            $drawer.removeClass('sticky');
            $('body').css('padding-top', '0');
          }

        }

      }

  });

});
