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

    afterLoad: function (anchorLink, index) {
        // history.pushState(null, null, "/" + index.anchor);
        if (this.item.clientWidth <= 990) {
            $(".section .intro").css("padding-top", "0px");
            $(".section .intro")
                .closest(".section")
                .css("padding-top", "0");
        }
    },
    onLeave: function (index, nextIndex, direction) {
        history.pushState(null, null, "/" + nextIndex.anchor);
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


$('.section7-carousel').owlCarousel({
    stagePadding: 500,
    loop:true,
    margin:70,
    nav:true,
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

