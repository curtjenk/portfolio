 // Closes the sidebar menu
 $("#menu-close").click(function(e) {
     e.preventDefault();
     $("#sidebar-wrapper").toggleClass("active");
 });

 // Opens the sidebar menu
 $("#menu-toggle").click(function(e) {
     e.preventDefault();
     $("#sidebar-wrapper").toggleClass("active");
 });

 // Scrolls to the selected menu item on the page
 $(function() {
     $('a[href*=#]:not([href=#])').click(function() {
         if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

             var target = $(this.hash);
             target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
             if (target.length) {
                 $('html,body').animate({
                     scrollTop: target.offset().top
                 }, 1000);
                 return false;
             }
         }
     });
 });


 //Cache reference to window and animation items
 var $animation_elements = $('#boot-camp');
 var $window = $(window);
 $window.on('scroll resize', check_if_in_view);
 $window.trigger('scroll');

 function check_if_in_view() {
     var $camp = $('#boot-camp');
     if ($camp.is(':in-viewport( 0 )')) {
         console.log("scrolled into viewport")
         $camp.find('.camp-card').css('visibility', 'visible');
         $camp.find('.camp-card').addClass('animated');
         
         $camp.find('.camp-card.left').removeClass('fadeOutLeft');
         $camp.find('.camp-card.middle').removeClass('fadeOutDownBig');
         $camp.find('.camp-card.right').removeClass('fadeOutRight');

         $camp.find('.camp-card.left').addClass('fadeInLeft');
         $camp.find('.camp-card.middle').addClass('fadeInUpBig');
         $camp.find('.camp-card.right').addClass('fadeInRight');
     } else {
         console.log("scrolled out of viewport")
         $camp.find('.camp-card').css('visibility', 'hidden');
         $camp.find('.camp-card').removeClass('animated');
         
         $camp.find('.camp-card.left').removeClass('fadeInLeft');
         $camp.find('.camp-card.middle').removeClass('fadeInUpBig');
         $camp.find('.camp-card.right').removeClass('fadeInRight');

         $camp.find('.camp-card.left').addClass('fadeOutLeft');
         $camp.find('.camp-card.middle').addClass('fadeOutDownBig');
         $camp.find('.camp-card.right').addClass('fadeOutRight');
     }
 }
