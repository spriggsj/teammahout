
(function($){


$(document).ready(function () {

  // The on click for my nav hamburger
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();
    });

    function hamburger_cross() {

      if (isClosed == true) {
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }

  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });

if($(window).width() < 1000){
  $('.mountain__container').each(function(){
      $(this).css('background-attachment', 'scroll');
  });

  $('.about__whoweare').each(function(){
    $(this).css('background-attachment','scroll');
  });

  $('.community__section').each(function(){
    $(this).css('background-attachment', 'scroll');
  });


}



});

  })( jQuery );
