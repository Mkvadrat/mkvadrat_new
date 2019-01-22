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
        smartSpeed:1000,
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
        nav:true,
        autoplay:false,
        smartSpeed:2000,
        autoplayTimeout:5000,
        dots:true,
        stopOnHover:true,
        navText:["",""],
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

    // PARALAX

    $(document).ready(function(){
        $window = $(window);
        $('div[data-type="background"]').each(function(){
         var $bgobj = $(this);
         $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
            var coords = '45% '+ yPos + 'px';
            $bgobj.css({ backgroundPosition: coords });
        }); 
     });    
    });


    // MENU BUTTON

    $(".menu-button").click(function() {
        $(".nav-header .menu-items").slideToggle();
    });

    $(".menu-button-fixed").click(function() {
        $(".fixed-menu .main-list").slideToggle();
    });

    $(".menu-button").click(function() {
        $(".header-other-pages .nav-header .right-side").slideToggle(0);
    });

    $(".menu-button-fixed").click(function() {
        $(".header-other-pages .fixed-menu .other-list").slideToggle(0);
    });

    $(".menu-button").click(function() {
        $(".nav-header > ul").slideToggle();
    });
    
    $('.send-form *[type="submit"]').attr('disabled', 'disabled');
    
    $('.send-form .agree *[type="checkbox"]').on('change', function () {
        if ($(this).is(':checked')) {
            $(this).parents('.agree').find('*[type="submit"]').removeAttr('disabled');
        } else {
            $(this).parents('.agree').find('*[type="submit"]').attr('disabled', 'disabled');
        }
    });
});