var myFullpage = new fullpage('#fullpage', {
    //Navigation

    menu: '#menu',
    lockAnchors: true,
    licenseKey: "F4D71089-214F4315-958D1E92-109DD6D4",
    anchors: ['home', 'section2', 'section3', 'section4', 'section5', 'section6', 'section7' , 'section8' , 'section9', 'section10', 'section11' , 'section12'],
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
    responsiveWidth: 921,
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

    afterLoad: function(origin, anchorLink, index) {
        // $.fn.fullpage.moveSlideRight();
        if (this.item.clientWidth <= 990) {
            $(".section .intro").css("padding-top", "0px");
            $(".section .intro")
                .closest(".section")
                .css("padding-top", "0");
        }
    },
    onLeave: function(index, destination, direction, nextIndex) {
        history.pushState(null, null, "/" + destination.anchor);
        if ($('a[hreflang="en"]').length) {
            $('a[hreflang="en"]')[0].href = url.replace('vi', 'en') + '/' + destination.anchor;
        }
        if ($('a[hreflang="vi"]').length) {
            $('a[hreflang="vi"]')[0].href = url.replace('en', 'vi') + '/' + destination.anchor;
        }
    },
    afterResize: function (width, height) {
        if (width <= 990) {
            $(".section .intro").css("padding-top", "0px");
            $(".section .intro")
                .closest(".section")
                .css("padding-top", "0");
        }
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
    responsive:{
        1920: {
            stagePadding: 460, 
        },
        1680: {
            stagePadding: 430, 
        },
        1440: {
            stagePadding: 350, 
        },
        1366: {
            stagePadding: 290, 
        },
        600:{
            items:1 
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
});