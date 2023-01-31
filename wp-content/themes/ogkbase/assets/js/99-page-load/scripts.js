/*
 * Copyright (c) 2019. OGK Creative
 */

jQuery(document).ready(function ($) {
    // HEADER DESKTOP JS ON HOVER START:

    $('li.mega-menu').hover(function () {
        $('.header-innerwrap-section').addClass('expandbg');
    }, function () {
        $('.header-innerwrap-section').removeClass('expandbg');
    });


    $('a.mega-menu').hover(function () {
        $('.header-innerwrap-section').addClass('expandbg');
    }, function () {
        $('.header-innerwrap-section').removeClass('expandbg');
    });

    $('li.mega-menu').hover(function () {
        $('.header-navbar ul > li').addClass('expand-submenu');
    }, function () {
        $('.header-navbar ul > li').removeClass('expand-submenu');
    });

    $('a.mega-menu').hover(function () {
        $('.header-navbar ul > li').addClass('expand-submenu');
    }, function () {
        $('.header-navbar ul > li').removeClass('expand-submenu');
    });

    
    
    // HEADER DESKTOP JS ON HOVER END:

    // MOBILE HAMBURGER JS:
    $(".hamburger-nav").click(function () {
        $('span').toggleClass("cross");
        $('.header-mobile-topwrap').toggleClass("abc");
    });
    // MOBILE HAMBURGER JS:

    // ACCORDIONS JS START:
    const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

    accordionItemHeaders.forEach(accordionItemHeader => {
        accordionItemHeader.addEventListener("click", event => {
            accordionItemHeader.classList.toggle("active");
            const accordionItemBody = accordionItemHeader.nextElementSibling;
            if (accordionItemHeader.classList.contains("active")) {
                accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
            }
            else {
                accordionItemBody.style.maxHeight = 0;
            }

        });
    });
    // ACCORDIONS JS END:

    // OUR TEAM TABS JS START:
    $(document).ready(function () {
        $('.tab-a').click(function () {
            $(".tab").removeClass('tab-active');
            $(".tab[data-id='" + $(this).attr('data-id') + "']").addClass("tab-active");
            $(".tab-a").removeClass('active-a');
            $(this).parent().find(".tab-a").addClass('active-a');
        });
        $('.nav-tabs-selector').on('change', function (e) {
            // console.log($(this).val());
            $(".tab").removeClass('tab-active');
            $(".tab[data-id='" + $(this).val() + "']").addClass("tab-active");
            $(".tab-a").removeClass('active-a');
            //console.log("tab[data-id='" + $(this).val() + "']")
            $(".tab-a[data-id='" + $(this).val() + "']").addClass("active-a");
            // $(this).closest(".our-team-bottom-content").find('.tab-menu li a').eq($(this).val()).tab('show'); 
        });


    });
    // OUR TEAM TABS JS END:

    // Mobile Header
    $(".hamburger").on("click", function () {
        $(this).toggleClass("open");
        $(".site-content").toggleClass("open");
        $(".nav-menu").toggleClass("open");
    });

    // CAMPING TRIP PHOTO SLIDER JS START:
    $('.owl-carousel.owl-theme.camping-trip-photo').owlCarousel({
        loop: true,
        // center: false,
        loop: true,
        margin: 10,
        items: 1,
        nav: true,
        autoplay: true,
        dots: false,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            767: {
                items: 1,
                nav: false
            },
            991: {
                items: 1,
                nav: true
            }
        }
    });
    // CAMPING TRIP PHOTO SLIDER JS END:

    $('.owl-carousel.owl-theme.therapeutic-slider').owlCarousel({
        loop: true,
        center: false,
        loop: true,
        margin: 10,
        pagination: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                nav: false,
                center: false,
                margin: 0
            },
            767: {
                items: 2
            },
            991: {
                items: 2
            },
            1199: {
                items: 2
            },
            1200: {
                items: 3
            },
            1440: {
                items: 4
            },
            1920: {
                items: 4
            }
        }
    });

    $('.owl-carousel.owl-theme.internal').owlCarousel({
        loop: true,
        center: false,
        loop: true,
        pagination: true,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            767: {
                items: 1,
                nav: false
            },
            991: {
                items: 1
            },
            1199: {
                items: 1
            },
            1200: {
                items: 1
            },
            1440: {
                items: 1
            },
            1920: {
                items: 1
            }
        }
    });

    $('.owl-carousel.owl-theme.female-sober').owlCarousel({
        loop: true,
        center: false,
        loop: true,
        pagination: true,
        nav: true,
        dots: false,
        margin: 9,
        autoplay: true,
        items: 2,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            767: {
                items: 1,
                nav: false
            },
            991: {
                items: 1
            },
            1199: {
                items: 2
            }
        }
    });

    $('.loop').owlCarousel({
        loop: true,
        center: false,
        loop: true,
        margin: 10,
        pagination: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                nav: false,
                center: false,
                margin: 0
            },
            767: {
                items: 2
            },
            991: {
                items: 3
            },
            1199: {
                items: 4
            },
            1200: {
                items: 4
            },
            1440: {
                items: 5
            },
            1920: {
                items: 6
            }
        }
    });

    $('.testimonil-slider').owlCarousel({
        nav: true,
        loop: true,
        pagination: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                nav: false,
                center: false
            },
            767: {
                items: 1,
                center: false
            }
        }

    });

    $('.owl-carousel').owlCarousel({
        center: true,
        loop: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        pagination: true,
        nav: true,
        rewindSpeed: 500,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            640: {
                items: 1,
                nav: false
            },
            767: {
                items: 2
            },
            991: {
                items: 3
            },
            1200: {
                items: 3
            },
            1440: {
                items: 5
            }
        }
    });
    $('').owlCarousel({
        loop: true,
        center: false,
        loop: true,
        margin: 10,
        pagination: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                nav: false,
                center: false,
                margin: 0
            },
            767: {
                items: 2
            },
            991: {
                items: 3
            },
            1199: {
                items: 4
            },
            1200: {
                items: 4
            },
            1440: {
                items: 5
            },
            1920: {
                items: 3

            }
        }
    });
    // VIDEO JS START:
    $('.video').parent().click(function () {
        if ($(this).children(".video").get(0).paused) {
            $(this).children(".video").get(0).play(); $(this).children(".playpause").fadeOut();
        } else {
            $(this).children(".video").get(0).pause();
            $(this).children(".playpause").fadeIn();
        }
    });
    // VIDEO JS END:
    // // LIGHTBOX JS START:  
    // // TODO: touch events
    // const divs = document.querySelectorAll('.gallery-inner');
    // const body = document.querySelector('.abc');
    // const prev = document.querySelector('.prev');
    // const next = document.querySelector('.next');

    // checkPrev = () => document.querySelector('.gallery-inner:first-child').classList.contains('show') ? prev.style.display = 'none' : prev.style.display = 'flex';

    // checkNext = () => document.querySelector('.gallery-inner:last-child').classList.contains('show') ? next.style.display = 'none' : next.style.display = 'flex';

    // Array.prototype.slice.call(divs).forEach(function (el) {
    //     el.addEventListener('click', function () {
    //         this.classList.toggle('show');
    //         body.classList.toggle('active');
    //         checkNext();
    //         checkPrev();
    //     });
    // });

    // prev.addEventListener('click', function () {
    //     const show = document.querySelector('.show');
    //     const event = document.createEvent('HTMLEvents');
    //     event.initEvent('click', true, false);
    //     show.previousElementSibling.dispatchEvent(event);
    //     show.classList.remove('show');
    //     body.classList.toggle('active');
    //     checkNext();
    // });

    // next.addEventListener('click', function () {
        
    //     const show = document.querySelector('.show');
    //     const event = document.createEvent('HTMLEvents');
    //     event.initEvent('click', true, false);
    //     show.nextElementSibling.dispatchEvent(event);
    //     show.classList.remove('show');
    //     body.classList.toggle('active');
    //     checkPrev();
    // });
});
