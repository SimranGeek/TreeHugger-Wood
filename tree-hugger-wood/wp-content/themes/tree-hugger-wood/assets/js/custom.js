jQuery(document).ready(function ($) {

    var window_size = jQuery(window).width();
    new WOW().init();

    var currentRequest = null;
    
    jQuery(".dropdown-tabbing li").on("click", function () {

        $(".dropdown-tabbing li").removeClass('gallery-active-tab');
        $(this).addClass('gallery-active-tab');
        var index = jQuery(this).attr('id');
        jQuery(".gallery-loader").css("display", "flex");

        currentRequest = $.ajax({
            type: 'POST',
            url: custom_call.ajaxurl,
            data: {
                'action': 'gallery_tabbing',
                'id': index,
            },
            success: function (data) {
                jQuery(".gallery-slider").slick('unslick');
                jQuery("#photo-gallery").html(data);
                jQuery(".gallery-loader").css("display", "none");
                gallery_slider();
            }
        });
    });
    if (window_size >= 991) {

        gallery_slider();
    }

    // add class on mobile drop box in Gellery Tabing
    jQuery(document).on('click', '.tab-dropdown', function(){
        jQuery('.dropdown-tabbing').toggleClass('drotab-dropdownpdown-show');
    });

    //close dropdown on click of item in dropdwon
    jQuery(document).on('click','.dropdown-tabbing', function(){
        jQuery(this).removeClass('drotab-dropdownpdown-show');
     
        var service = jQuery(document).find(".dropdown-tabbing .gallery-active-tab").text();
        jQuery('.tab-dropdown').text(service);               
    });

    /* FAQ Page service-faq */
    jQuery('.service-faq .faq-content').hide();
    jQuery('.service-faq h3').click(function (j) {
        var dropDown = jQuery(this).closest('div').find('.faq-content');
        jQuery(this).closest('.service-faq').find('.faq-content').not(dropDown).slideUp();
        if (jQuery(this).hasClass('active-faq')) {
            jQuery(this).removeClass('active-faq');
        } else {
            jQuery(this).closest('.service-faq').find('h3.active-faq').removeClass('active-faq');
            jQuery(this).addClass('active-faq');
        }
        dropDown.stop(false, true).slideToggle();
        j.preventDefault();
    });

    

    setTimeout(function () {
        jQuery("#sbi_images").slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            draggable: true,
            rows: 0,
            swipeToSlide: true,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                    rows: 0,
                }
            }]
        });
    }, 1000);

    /* Scroll To Top JS */
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#scrollToTop').fadeIn();
        } else {
            jQuery('#scrollToTop').fadeOut();
        }
    });
    jQuery('#scrollToTop').click(function () {
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    /* Sticky Header JS */
    jQuery(window).scroll(function () { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    /* Mobile Menu JS */
    jQuery('.menu-item a').not('#primary-menu .menu-item-has-children a:first').click(function () {
        jQuery(".main-navigation").removeClass('toggled	');
    });

    if (window_size <= 991) {

        /* FAQ Page gallery-faq */
        jQuery('.gallery-faq-wp .faq-content').hide();
        jQuery('.gallery-faq-wp h3').click(function (j) {
            var dropDown = jQuery(this).closest('div').find('.faq-content');
            jQuery(this).closest('.gallery-faq-wp').find('.faq-content').not(dropDown).slideUp();
            if (jQuery(this).hasClass('active-faq')) {
                jQuery(this).removeClass('active-faq');
            } else {
                jQuery(this).closest('.gallery-faq-wp').find('h3.active-faq').removeClass('active-faq');
                jQuery(this).addClass('active-faq');
            }
            dropDown.stop(false, true).slideToggle();
            j.preventDefault();
        });
        /* dropDown mobile menu */
        jQuery(".menu-item-has-children a").first().attr('href', 'javascript:void(0);');

        /* dropDown mobile menu show and hide */
        jQuery('body').on('click', '#primary-menu .menu-item-has-children', function () {
            if ((jQuery(this).hasClass('active-sub-menu'))) {
                jQuery(this).removeClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'none');
            } else {
                jQuery(".menu-item-has-children").removeClass('active-sub-menu');
                jQuery(".sub-menu").css('display', 'none');
                jQuery(this).addClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'block');
            }
        });

        var $slider = jQuery('.gallery-slider');    
        if ($slider.length) {
            var currentSlide;
            var slidesCount = $slider.length;
            var sliderCounter = document.createElement('div');
            sliderCounter.classList.add('slider__counter');
            
            var updateSliderCounter = function(slick, currentIndex) {
                currentSlide = slick.slickCurrentSlide() + 1;
                slidesCount = slick.slideCount;
                jQuery(sliderCounter).text(currentSlide + '/' +slidesCount)
            };

            $slider.on('init', function(event, slick) {
                $slider.append(sliderCounter);
                updateSliderCounter(slick);
            });

            $slider.on('afterChange', function(event, slick, currentSlide) {
                updateSliderCounter(slick, currentSlide);
            });
            gallery_slider();

        }
    }



});

/* after load JS */
jQuery(window).on('load', function () {
    // smooth scroll - change navigation link  JS
    jQuery("ul.menu li.menu-item").each(function () {
        var href = jQuery(this).find("a").attr("href");
        if (href.includes("#")) {
            if (href.substr(0, 1) == '#') {
                if (jQuery(href).length > 0) {
                    jQuery(this).find("a").first().attr("href", window.location.href.replace('#', '') + href);
                } else {
                    jQuery(this).find("a").first().attr("href", custom_call.homeurl + href);
                }
            }
        }
    });

    // fancy box stop slider JS
    jQuery().fancybox({
        selector: '[data-fancybox]',
        "afterShow": function () {
            jQuery('.slick-initialized').slick('slickPause');
        },

        "afterClose": function () {
            setTimeout(() => {
                jQuery('.slick-initialized').slick('slickPlay');
                jQuery("body").trigger("click");
            }, 1000);

        }
    });
});

/* Gallery Slider */
function gallery_slider() {
    jQuery('.gallery-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false,
        rows: 0,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 2,
                infinite: true,
                dots: false,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
            }
        }
        ]
    });
}
