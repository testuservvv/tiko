$(document).ready(function () {
    var $ = jQuery.noConflict();
    initHomePage();
});

function initHomePage() {

    /* for top navigation */
    $(" #nav ul ").css({display: "none"}); // Opera Fix
    $(" #nav li").hover(function () {
        $(this).find('ul:first').css({visibility: "visible", display: "none"}).slideDown(400);
    }, function () {
        $(this).find('ul:first').css({visibility: "hidden"});
    });

    $('#boxslideshow').cycle({
        timeout: 6000,  // milliseconds between slide transitions (0 to disable auto advance)
        fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        pause: 0,	  // true to enable "pause on hover"
        pauseOnPagerHover: 0 // true to pause when hovering over pager link
    });

    /* for news ticker */
    $(".ticker").jCarouselLite({
        vertical: true,
        hoverPause: true,
        visible: 1,
        auto: 3000,
        speed: 1500,
        btnNext: ".next_item",
        btnPrev: ".prev_item"
    });

    jQuery("#featured").scrollable({
        // basic settings
        vertical: true,
        size: 1,
        speed: 1000,
        clickable: false,
        loop: true,
        // up/down keys will always control this scrollable
        keyboard: 'static',

        // assign left/right keys to the actively viewed scrollable
        onSeek: function (event, i) {
            horizontal.scrollable(i).focus();
        }
// main navigator
    }).autoscroll({autoplay: true, interval: 5000}).navigator("#main_navi");

// horizontal scrollables. each one is circular and has its own navigator instance
    var horizontal = jQuery(".items").scrollable({size: 1}).circular().navigator(".navi");
// when page loads setup keyboard focus on the first horzontal scrollable
    horizontal.eq(0).scrollable().focus();
}