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
    // JS select
    $('select').each(function() {
        var $this = jQuery(this);
        numberOfOptions = jQuery(this).children('option').length;
        var val = $(this).val();
        $this.addClass('select-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled" id="display-selected"></div>');
        var $styledSelect = $this.next('div.select-styled');
        var $list = jQuery('<ul />', {
            'class': 'select-options',
            'id': 'display-option'
        }).insertAfter($styledSelect);
        for (var i = 0; i < numberOfOptions; i++) {
            var html = $this.children('option').eq(i).text();
            if (val == $this.children('option').eq(i).val()) {
                $styledSelect.text($this.children('option').eq(i).text());
            }
            jQuery('<li />', {
                html: html,
                rel: $this.children('option').eq(i).val(),
                class: (val == $this.children('option').eq(i).val()) ? 'active' : '',
            }).appendTo($list);
        }
        var $listItems = $list.children('li');
        $styledSelect.click(function(e) {
            e.stopPropagation();
            jQuery('div.select-styled.active').not(this).each(function() {
                jQuery(this).removeClass('active').next('ul.select-options').hide();
            });
            jQuery(this).toggleClass('active').next('ul.select-options').toggle();
            
        });
        $listItems.click(function(e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            if ((val != $(this).attr('rel') || $(this).attr('rel') == '') && !$(this).hasClass('active')) {
                $list.children('li').removeClass('active');
                $(this).addClass('active');
                $this.val($(this).attr('rel'));
                $this.trigger('change');
            }
            $list.hide();
        });
        jQuery(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });
    });
    $('.select').on('change', function() {
        $(this).addClass('change-color');
    });
    // END select
});