// $(window).scroll(function() {
//     var nav = $('#navbarMain');
//     var top = 200;
//     if ($(window).scrollTop() >= top) {

//         nav.addClass('fixed-top');

//     } else {
//         nav.removeClass('fixed-top');
//     }
// });
var windows = $(window);
var screenSize = windows.width();
var sticky = $('.header-sticky');
windows.on('scroll', function() {
    var scroll = windows.scrollTop();
    var headerHeight = sticky.height();
    if (screenSize >= 320) {
        if (scroll < headerHeight) {
            sticky.removeClass('is-sticky');
        } else {
            sticky.addClass('is-sticky');
        }
    }
});

// wow JS
wow = new WOW({
    animateClass: 'animated',
    offset: 120,
    callback: function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
});
wow.init();

//  carousel
$('.owl-carousel').owlCarousel({
    loop: true,
    nav: true,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
})
$(document).ready(function() {

    // Gets the video src from the data-src on each button

    var $videoSrc;
    $('.video-btn').click(function() {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);

    // when the modal is opened autoplay it  
    $('#myModal').on('shown.bs.modal', function(e) {

        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })

    // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function(e) {
        // a poor man's stop video
        $("#video").attr('src', $videoSrc);
    })

    // document ready  
});