$(document).ready(function () {
	console.log("doc ready");
	$(".mg-tile-outside").hover(
		function () {
			console.log("mouseenter");

			$(this).siblings(".mg-tile-inside").css('display', 'block');
			$(this).siblings(".mg-tile-inside").slideDown(2000);
			// $(this).siblings(".mg-tile-inside").animate({top: "+=200"}, "slow");
		},
		function () {
			console.log("mouseleave");
			$(this).siblings(".mg-tile-inside").slideUp(2000);
			console.log("animation complete");
			$(this).siblings(".mg-tile-inside").css('display', 'none');
		});
});



// Scrolls to the selected menu item on the page
// $(function() {
//     $('a[href*=#]:not([href=#])').click(function() {
//         if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
//
//             var target = $(this.hash);
//             target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//             if (target.length) {
//                 $('html,body').animate({
//                     scrollTop: target.offset().top + 20
//                 }, 1000);
//                 return false;
//             }
//         }
//     });
// });


// Cache reference to window and animation items
var $animation_elements = $('#reboot');
var $window = $(window);
$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');

function check_if_in_view() {
	var $camp = $('#reboot');
	if ($camp.is(':in-viewport( 0 )')) {
		// console.log("scrolled into viewport");
		$camp.find('.skill-card').css('visibility', 'visible');
		$camp.find('.skill-card').addClass('animated');

		$camp.find('.skill-card.left').removeClass('fadeOutLeft');
		$camp.find('.skill-card.middle').removeClass('fadeOutDownBig');
		$camp.find('.skill-card.right').removeClass('fadeOutRight');

		$camp.find('.skill-card.left').addClass('fadeInLeft');
		$camp.find('.skill-card.middle').addClass('fadeInUpBig');
		$camp.find('.skill-card.right').addClass('fadeInRight');
	} else {
		// console.log("scrolled out of viewport");
		$camp.find('.skill-card').css('visibility', 'hidden');
		$camp.find('.skill-card').removeClass('animated');

		$camp.find('.skill-card.left').removeClass('fadeInLeft');
		$camp.find('.skill-card.middle').removeClass('fadeInUpBig');
		$camp.find('.skill-card.right').removeClass('fadeInRight');

		$camp.find('.skill-card.left').addClass('fadeOutLeft');
		$camp.find('.skill-card.middle').addClass('fadeOutDownBig');
		$camp.find('.skill-card.right').addClass('fadeOutRight');
	}
}
