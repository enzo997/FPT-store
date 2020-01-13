$ = jQuery;
$(document).ready(function(){
    $(window).scroll(function() { 
        let top = $(window).scrollTop();
        if (top > 100) {
            $('.header-desktop').addClass('change-color');
            $('.header-mobile').addClass('change-color');
            $('.button-bottom-scroll').addClass('show-btn-scroll');
        }
        else {
            $('.header-desktop').removeClass('change-color');
            $('.header-mobile').removeClass('change-color');
            $('.button-bottom-scroll').removeClass('show-btn-scroll');
        }
    });
    let top = $(window).scrollTop();
    if (top > 100) {
        $('.header-desktop').addClass('change-color');
        $('.header-mobile').addClass('change-color');
    }
    else {
        $('.header-desktop').removeClass('change-color');
        $('.header-mobile').removeClass('change-color');
    }
    //header-mobile
    $('.header-mobile .btn-bar').click(function() {
        $(this).toggleClass('active-menu-show'),$('.header-desktop').toggleClass('menu-nav-show'),
        $('body').toggleClass('no-Scroll'),  $('.button-bottom-scroll').toggleClass('hidden-btn-scroll');
    });
    $('.button-bottom-scroll').click(function(event) {
        $('html,body').animate({scrollTop: 0},700);
    });
    //call-slick
    $('.home-page--banner-top').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        speed: 1300,
        arrows: false,
        dots: false,
        infinite: true
    });
});