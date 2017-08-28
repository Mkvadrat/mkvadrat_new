$(document).ready(function() {

	// FANCYBOX
    $(".fancybox").fancybox();

    // OWL-CAROUSEL
    $('.example-site').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:true,
        smartSpeed:2000,
        autoplayTimeout:5000,
        dots:true,
        stopOnHover:true,
        navigationText:["",""],
        rewindNav:true,
        pagination:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.with-whom').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        smartSpeed:2000,
        autoplayTimeout:5000,
        dots:false,
        stopOnHover:true,
        navigationText:["",""],
        rewindNav:true,
        pagination:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.reviews-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:false,
        smartSpeed:2000,
        autoplayTimeout:5000,
        dots:true,
        stopOnHover:true,
        navigationText:["",""],
        rewindNav:true,
        pagination:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });

    // FIXED HEADER

    $(window).scroll(function(){
        if ($(window).scrollTop() > 100) {
            $('.fixed-menu').addClass('fixed-menu-visible');
        }
        else {
            $('.fixed-menu').removeClass('fixed-menu-visible');
        }

    });

    // ПЛАВНЫЙ СКРОЛЛ К ЯКОРЮ

    $(document).ready(function() {
        $("a.scrollto").click(function () {
            var elementClick = $(this).attr("href")
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
            return false;
        });
    });

    // КОЛЛАЖ

    $("#card-1,#card-2,#card-3,#card-4,#card-5,#card-6").flip({
      trigger: 'hover',
    });

});