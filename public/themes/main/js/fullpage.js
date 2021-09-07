var myFullpage = new fullpage('#fullpage', {
    //Navigation

    menu: '#menu',
    lockAnchors: true,
    licenseKey: "F4D71089-214F4315-958D1E92-109DD6D4",
    anchors: ['trang-chu', 'su-tro-lai', 'hinh-360', 'video', 'ngoai-that', 'hinh-anh', 'noi-that' , 'van-hanh' , 'an-toan', 'san-pham', 'chon-xe-online' , 'footer'],
    navigation: false,
    navigationPosition: 'right',
    navigationTooltips: ['firstSlide', 'secondSlide'],
    showActiveTooltip: false,
    slidesNavigation: true,
    slidesNavPosition: 'bottom',

    //Scrolling
    css3: true,
    scrollingSpeed: 700,
    fitToSection: true,
    fitToSectionDelay: 1000,
    scrollBar: false,
    easing: "easeInOutCubic",
    easingcss3: "ease",
    loopBottom: false,
    loopTop: false,
    loopHorizontal: true,
    setAllowScrolling: false,
    responsiveWidth: 1025,
    continuousVertical: false,
    continuousHorizontal: false,
    scrollHorizontally: false,
    interlockedSlides: false,
    dragAndMove: false,
    offsetSections: false,
    resetSliders: false,

    fadingEffect: false,
    normalScrollElements: ".animated-modal",
    scrollOverflow: false,
    scrollOverflowReset: false,
    scrollOverflowOptions: null,
    touchSensitivity: 15,
    bigSectionsDestination: null,


    //Accessibility
    keyboardScrolling: true,
    animateAnchor: true,
    recordHistory: true,

    //Design
    controlArrows: true,
    verticalCentered: true,
    onLeave: function(index, destination, direction, nextIndex) {
        history.pushState(null, null, "/" + destination.anchor);
        if ($('a[hreflang="en"]').length) {
            $('a[hreflang="en"]')[0].href = url.replace('vi', 'en') + '/' + destination.anchor;
        }
        if ($('a[hreflang="vi"]').length) {
            $('a[hreflang="vi"]')[0].href = url.replace('en', 'vi') + '/' + destination.anchor;
        }
        jQuery('.section [data-aos]').removeClass("aos-animate");
    },
    onSlideLeave: function(){
        jQuery('.slide [data-aos]').removeClass("aos-animate");
    },
    afterResize: function (width, height) {
        if (width <= 990) {
            $(".section .intro").css("padding-top", "0px");
            $(".section .intro")
                .closest(".section")
                .css("padding-top", "0");
        }
    },
    afterSlideLoad: function(){
        jQuery('.slide.active [data-aos]').addClass("aos-animate");
    },
    afterLoad: function(origin, anchorLink, index) {
        // $.fn.fullpage.moveSlideRight();
        if (this.item.clientWidth <= 990) {
            $(".section .intro").css("padding-top", "0px");
            $(".section .intro")
                .closest(".section")
                .css("padding-top", "0");
        }

        jQuery('.section.active [data-aos]').addClass("aos-animate");
        //jQuery('.fp-table.active .aos-init').addClass('aos-animate');
    },

    afterResponsive: function (isResponsive) { }

});
$('#menu li').click(function(e) {
    // e.preventDefault();
    try {
        myFullpage.moveTo(this.getAttribute('data-menuanchor'));
    } catch (error) {
        console.log(error);
    }
});

$('.section7-carousel').owlCarousel({
    center: true, 
    autoplay:false, 
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    stagePadding: 450, 
    dots: true,
    items:1,           
    loop:true,     
    margin:70,
    nav: true,
    navText: ["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i></i></div>", "<div class='nav-btn next-slide'><i class='fas fa-chevron-right'></i></div>"],      
    responsive:{
        1920: {
            stagePadding: 460, 
            margin:70, 
        },
        1680: {
            stagePadding: 430, 
            margin:70, 
        },
        1440: {
            stagePadding: 350, 
            margin:70, 
        },
        1366: {
            stagePadding: 290, 
            margin:70, 
        },
        1266: {
            stagePadding: 290, 
            margin:70, 
        },
        768: {
            stagePadding: 100, 
            margin:0, 
        },
        468:{
            stagePadding: 0, 
            margin:0,
        },
        414:{
            stagePadding: 0, 
            margin:0,
        },
        250:{
            stagePadding: 0, 
            margin:0,
        }
        
    },
    onInitialized : function(){
        if($('.owl-item').first().hasClass('active'))
            $('.owl-prev').hide();
        else
            $('.owl-prev').show();
    } 
}); 

$(document).ready(function(){
    if(document.getElementById('fullpage')){
        myFullpage.moveTo(document.getElementById('fullpage').getAttribute('data-section'));
    }
    AOS.init();
});

$('.open-menu').click(function(){
    $('.content-show').show('slow');
});
$('.close-menu').click(function(){
    $('.content-show').hide('slow');
});
$('.close-menu2').click(function(){
    $('.content-show').hide('slow');
});


$('.fixed-bg').click(function(){
$('.fixed-bg').hide();
$('.animated-modal-tk').hide();
});
$('.close-popup').click(function(){
    $('.fixed-bg').hide();
    $('.animated-modal-tk').hide();
    });