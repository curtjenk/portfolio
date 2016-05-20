


// Scrolls to the selected menu item on the page
$(function() {
    // $('a[href*=#]:not([href=#])').click(function() {
    $('a[href]:not([href="#"])').click(function() {
      console.log('scrolling');
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 60
                }, 1000);
                return false;
            }
        }
    });
});


$('area').qtip({
    content: {
        text: 'Support for area maps with no extra configuration! Awesome.'
    },
    position: {
        my: 'top left',
        at: 'bottom right'
    }
});