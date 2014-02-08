
(function () {

;(function($) {

  // DOM ready
  $(function() {
    
    $('#block-system-main-menu').append($('<div class="nav-mobile"></div>'));
    $('#block-system-main-menu .expanded').prepend('<span class="nav-click"><i class="nav-arrow"></i></span>');
    $('.nav-mobile').click(function(){
      $('#block-system-main-menu > .menu').slideToggle();
      $('.nav-mobile').toggleClass('nav-mobile-active');
    });

    $('#block-system-main-menu > .menu .nav-click').click(function(){
      $('.nav-click').toggleClass('nav-click-active');
      $(this).siblings('#block-system-main-menu .menu li .menu').slideToggle();
      $(this).children('.nav-arrow').toggleClass('nav-rotate'); 
    });

  });
  
})(jQuery);
}());