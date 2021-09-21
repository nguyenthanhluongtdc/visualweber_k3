let indexX = -1;
// let colors = ['#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff' , '#000' , '#fff', '#000', '#fff' , '#fff'];

var myFullpage = new fullpage('#fullpage', {
    //Navigation

    menu: '#menu',
    lockAnchors: true,
    licenseKey: "F4D71089-214F4315-958D1E92-109DD6D4",
    anchors: ['trang-chu', 'su-tro-lai', 'hinh-360', 'video', 'ngoai-that', 'hinh-anh', 'noi-that' , 'van-hanh' , 'an-toan', 'dat-xe-truc-tuyen', 'bo-suu-tap', 'lien-he'],
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
    // normalScrollElements: ".scrollable-content",
    normalScrollElements: ".fancybox-container, .scrollable-content, #animatedModal103",
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

        indexX = anchorLink.index;
        // color = colors[indexX];

        $moveDown = $('#moveDown');

        // $moveDown.css('color', color);
        // $moveDown.find('.mouse').css('border-color', color).find('.scroll-down').css('background', color);

        // console.log(anchorLink)

        if(anchorLink.isLast) {
            $moveDown.hide();
            $('.moveTop').show();
        }else {
            $('.moveTop').hide();
            
            if(indexX!==0) {
                $moveDown.show();
            }else {
                $moveDown.hide();
            }
        }

        let count = window.location.pathname.toString().split('/').length;
        let url = window.location.pathname.substr(0, window.location.pathname.toString().lastIndexOf('/'));
        let paramQuery = window.location.search;
        if (count <= 2) {
            url = window.location.pathname.toString();
        }
        if(origin.anchor != 'trang-chu'){
            history.pushState(null, null, url + '/' + anchorLink.anchor + paramQuery);
        }
        if (this.item.clientWidth <= 990) {
            $(".section .intro").css("padding-top", "0px");
            $(".section .intro")
                .closest(".section")
                .css("padding-top", "0");
        }
        // CSS lại element
        if($('.section7-wrap .top').length && $('.section7-wrap .section7-carousel').length){
            let hei = $('.section7-wrap .top').height();
            // $('.section7-wrap .section7-carousel')[0].style.height = `calc(100% - ${hei + 110}px)`;
            if($('.section7-wrap .owl-item.center .content').length){
                $('.section7-wrap .owl-item.center .content')[0].style.top = `calc(-${hei + 53}px)`;
            }
        }
        if($('.section5-wrap .section5-top').length){
            let hei = $('.section5-wrap .section5-top').height();
            // $('.section5-wrap .section5-tab')[0].style.height = `calc(100% - ${hei + 100}px)`;
            // if($('.section5-wrap .section5-abso').length){
            //     if(document.body.clientWidth > 1300){
            //         $('.section5-wrap .section5-abso')[0].style.top = `${hei - 30}px`;
            //         $('.section5-wrap .section5-abso')[0].style.height = `${hei + (hei - (hei - 40))}px`;
            //     }else{
            //         $('.section5-wrap .section5-abso')[0].style.top = `${hei - 20}px`;
            //         $('.section5-wrap .section5-abso')[0].style.height = `${hei + (hei - (hei - 40))}px`;
            //     }
            // }
        }
    },
    onLeave: async function(index, destination, direction, nextIndex) {
        // history.pushState(null, null, "/" + nextIndex.anchor);
        let count = window.location.pathname.toString().split('/').length;
        let url = window.location.pathname.substr(0, window.location.pathname.toString().lastIndexOf('/'));
        let paramQuery = window.location.search;
        if (count <= 2) {
            url = window.location.pathname.toString();
        }
        history.pushState(null, null, url + '/' + destination.anchor + paramQuery);

        if ($('a[hreflang="en"]').length) {
            $('a[hreflang="en"]')[0].href = url.replace('vi', 'en') + '/' + destination.anchor;
        }
        if ($('a[hreflang="vi"]').length) {
            $('a[hreflang="vi"]')[0].href = url.replace('en', 'vi') + '/' + destination.anchor;
        }
        await jQuery('.section [data-aos]').removeClass("aos-animate");
        
         // $.fn.fullpage.moveSlideRight();
         if (this.item.clientWidth <= 990) {
            $(".section .intro").css("padding-top", "0px");
            $(".section .intro")
                .closest(".section")
                .css("padding-top", "0");
        }

        await jQuery('.section.active [data-aos]').addClass("aos-animate");
        //jQuery('.fp-table.active .aos-init').addClass('aos-animate');
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
        // CSS lại element
        if($('.section7-wrap .top').length && $('.section7-wrap .section7-carousel').length){
            let hei = $('.section7-wrap .top').height();
            // $('.section7-wrap .section7-carousel')[0].style.height = `calc(100% - ${hei + 110}px)`;
            if($('.section7-wrap .owl-item.center .content').length){
                $('.section7-wrap .owl-item.center .content')[0].style.top = `calc(-${hei + 53}px)`;
            }
        }
        if($('.section5-wrap .section5-top').length){
            let hei = $('.section5-wrap .section5-top').height();
            // $('.section5-wrap .section5-tab')[0].style.height = `calc(100% - ${hei + 100}px)`;
            // if($('.section5-wrap .section5-abso').length){
            //     if(document.body.clientWidth > 1300){
            //         $('.section5-wrap .section5-abso')[0].style.top = `${hei - 30}px`;
            //         $('.section5-wrap .section5-abso')[0].style.height = `${hei + (hei - (hei - 40))}px`;
            //     }else{
            //         $('.section5-wrap .section5-abso')[0].style.top = `${hei - 20}px`;
            //         $('.section5-wrap .section5-abso')[0].style.height = `${hei + (hei - (hei - 40))}px`;
            //     }
            // }
        }
    },
    afterSlideLoad: function(){
        jQuery('.slide.active [data-aos]').addClass("aos-animate");
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
$('.menu2ne li').click(function(e) {
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
    navText: ["<div class='nav-btn prev-slide'><i class='fas fa-long-arrow-alt-left'></i></div>", "<div class='nav-btn next-slide'><i class='fas fa-long-arrow-alt-right'></i></div>"],      
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
            stagePadding: 320, 
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
        1025: {
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
$('.section11-carousel').owlCarousel({
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
    navText: ["<div class='nav-btn prev-slide'><i class='fas fa-long-arrow-alt-left'></i></div>", "<div class='nav-btn next-slide'><i class='fas fa-long-arrow-alt-right'></i></div>"],      
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
            stagePadding: 320, 
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
        1025: {
            stagePadding: 290, 
            margin:70, 
        },
        768: {
            stagePadding: 100, 
            margin:0, 
        },
        468:{
            stagePadding: 50, 
            margin:0,
        },
        414:{
            stagePadding: 50, 
            margin:0,
        },
        250:{
            stagePadding: 50, 
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
    $('.camon').hide();
    $('body').removeClass('active-popup');

    });

$('.close-dangky').click(function(){
    $('.dangky').hide(300);
    $('.fixed-bgg').hide();
});
// $('.register').click(function(){
//     $('.dangky').show(300);
//     $('.fixed-bgg').show();
// });
$('.fixed-bgg').click(function(){
    $('.dangky').hide(300);
    $('.fixed-bgg').hide();
});
$('.button-video').click(function(){
    $('.showvideo').click();
})

$(".js-example-disabled-results").select2();
  


if ($(window).width() < 1025) {
    let btn = $('.moveTop');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 500) {
        btn.show();
      } else {
        btn.hide()
      }
    });
    
    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
    });
}else {
    $(document).on('click', '#moveDown', function(){
        fullpage_api.moveSectionDown();
    });
    
    $(document).on('click', '.moveTop', function(){
        fullpage_api.moveTo(1);
    });
}
$(document).on('click', '.wrap-kp', function(){
    fullpage_api.moveSectionDown();
});

    // document.addEventListener("DOMContentLoaded", function(){
    //     var province=document.getElementById("province");
    //     window.onload=function(){
    //         $.ajax({
    //             url: 'https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/province',
    //             headers: {
    //                 'token':'2144f26b-183f-11ec-b8c6-fade198b4859',
    //                 'Content-Type':'application/json'
    //             },
    //             method: 'GET',
    //             dataType: 'json',
    //             success: function(response){
                   
    //                 var str="<option selected>Tỉnh/ Thành phố</option>";
    //                 for(var i=0; i<response.data.length; i++){
    //                     console.log(response.data[i].ProvinceName);
    //                     str=str+"<option class='provinceId' data-province='"+response.data[i].ProvinceID+"' >" +response.data[i].ProvinceName + "</option>"
    //                 }
    //                 province.innerHTML=str;
    //             }
    //         });
    //     }
    // }, false)

//    function changeFunc(){
//        var selectBox = document.getElementById("province");
//        var selectedValue = selectBox.options[selectBox.selectedIndex].getAttribute('data-province');
//        var district=document.getElementById('district');
//        $.ajax({
//                 url: 'https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/district',
//                 headers: {
//                     'token':'2144f26b-183f-11ec-b8c6-fade198b4859',
//                     'Content-Type':'application/json'
//                 },
//                 method: 'GET',
//                 dataType: 'json',
//                 success: function(response){
//                     var str="<option selected>Quận huyện</option>";
//                     for(var i=0; i<response.data.length; i++){
//                         if(response.data[i].ProvinceID==selectedValue)
//                         str=str+"<option class='districtId' data-district='"+response.data[i].DistrictID+"' >" +response.data[i].DistrictName + "</option>"
//                     }
//                     district.innerHTML=str;
//                 }
//             });
//    }

//    function changeFuncDistrict(){
//        var selectBox = document.getElementById("district");
//        var selectedValue = selectBox.options[selectBox.selectedIndex].getAttribute('data-district');
//        var ward = document.getElementById('ward');
//        $.ajax({
//                 url: 'https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/ward?district_id='+selectedValue,
//                 headers: {
//                     'token':'2144f26b-183f-11ec-b8c6-fade198b4859',
//                     'Content-Type':'application/json'
//                 },
//                 method: 'GET',
//                 dataType: 'json',
//                 success: function(response){
//                     console.log('succes: ');
//                     console.log(response.data);
//                     var str="<option selected>Phường xã</option>";
//                     for(var i=0; i<response.data.length; i++){
//                         str=str+"<option class='wardId' data-ward='"+response.data[i].WardCode+"' >" +response.data[i].WardName + "</option>"
//                     }
//                     ward.innerHTML=str;
//                 }
//             });
//    }
var Helper = {
    covertMoney: (value) => {
        if(value){
            return value.toLocaleString('it-IT') + ' VNĐ';
        }
        value = 0;
        return value.toLocaleString('it-IT') + ' VNĐ';
    }

}
var getForForm = {
    getShowroom: () => {
        const resultShoroom = $('#city')
        if (!resultShoroom) return
        
        $(document).on('change', '#city', function(e){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: showroomsUrl,
                data: {
                    provinceId: $(this).val()
                },
                method: "GET",
                dataType: "json",
                beforeSend: function() {
                    // $('.loading').removeClass('d-none')
                    $("#ward-form").attr('disabled', true);
                    $('#ward-form').html('<option selected value="" >Vui lòng chọn Phường/Xã</option>')
                },
                success: function (data) {
                    if($('#showroom-form').length){
                        $('#showroom-form').html(data.showroom)
                        $("#showroom-form").removeAttr('disabled');
                    }
                },
                error: function (xhr, thrownError) {
                    console.log(xhr.responseText);
                    console.log(thrownError)
                    // $('.loading').addClass('d-none')
                },
                complete: function(xhr, status) {
                    // $('.loading').addClass('d-none')
                }
            })
        })
    },
    getDistrict: () => {
        const resultShoroom = $('#city')
        if (!resultShoroom) return
        
        $(document).on('change', '#city', function(e){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: quanhuyenUrl,
                data: {
                    provinceId: $(this).val()
                },
                method: "GET",
                dataType: "json",
                beforeSend: function() {
                    // $('.loading').removeClass('d-none')
                    $("#ward-form").attr('disabled', true);
                    $('#ward-form').html('<option selected value="" >Vui lòng chọn Phường/Xã</option>')
                },
                success: function (data) {
                    if($('#district-form').length){
                        $('#district-form').html(data.district)
                        $("#district-form").removeAttr('disabled');
                    }
                },
                error: function (xhr, thrownError) {
                    console.log(xhr.responseText);
                    console.log(thrownError)
                    // $('.loading').addClass('d-none')
                },
                complete: function(xhr, status) {
                    // $('.loading').addClass('d-none')
                }
            })
        })
    },
    getWard: () => {
        const resultShoroom = $('#city')
        if (!resultShoroom) return
        
        $(document).on('change', '#district-form', function(e){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: xaphuongUrl,
                data: {
                    districtId: $(this).val()
                },
                method: "GET",
                dataType: "json",
                beforeSend: function() {
                    // $('.loading').removeClass('d-none')
                    $("#ward-form").removeAttr('disabled');
                },
                success: function (data) {
                    // console.log(data);
                    if($('#ward-form').length){
                        $('#ward-form').html(data.ward)
                    }
                },
                error: function (xhr, thrownError) {
                    console.log(xhr.responseText);
                    console.log(thrownError)
                    // $('.loading').addClass('d-none')
                },
                complete: function(xhr, status) {
                    // $('.loading').addClass('d-none')
                }
            })
        })
    },
    getPriceCar: () => {
        var srcModal = ""
        var carPrice = 0
        var total = 0
        var phi_truoc_ba = 0
        var discount = 0
        var priceAfterDiscount = 0;
        $(document).on('click','#pre-order-car', function(){
             srcModal = $(this).data('src')
        })
        $(document).on('change',srcModal +' #city_buy_car', function(){
            carPrice = $(srcModal + ' #car_price').data('price')
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: carPriceUrl,
                data: {
                    cityId: $(this).val()
                },
                method: "GET",
                dataType: "json",
                beforeSend: function() {
                    // $('.loading').removeClass('d-none')
                    // $("#ward-form").attr('disabled', true);
                    // $('#ward-form').html('<option selected value="" >Vui lòng chọn Phường/Xã</option>')
                },
                success: function (data) {
                    // console.log(data);
                    phi_truoc_ba = carPrice*data.phi_truoc_ba/100
                    priceAfterDiscount = carPrice - discount
                    // var gtgt = carPrice*10/100
                    var gtgt = 0
                    total = priceAfterDiscount + phi_truoc_ba + gtgt + data.phi_dang_ky_bien_so + data.phi_dang_kiem_xe
                    // console.log(total);
                    $(srcModal + ' #registration_fee').html(Helper.covertMoney(phi_truoc_ba))
                    $(srcModal + ' #car_discount').html(Helper.covertMoney(discount))
                    $(srcModal + ' #car_price_after_discount').html(Helper.covertMoney(priceAfterDiscount))
                    // $(srcModal + ' #fee').html(Helper.covertMoney(gtgt))
                    $(srcModal + ' #registry_fee').html(Helper.covertMoney(data.phi_dang_kiem_xe))
                    $(srcModal + ' #license_plate_fee').html(Helper.covertMoney(data.phi_dang_ky_bien_so))
                    $(srcModal + ' #car_price_total').html(Helper.covertMoney(total))
                    $(srcModal + ' input[name="total_price"]')[0].value = total
                },
                error: function (xhr, thrownError) {
                    console.log(xhr.responseText);
                    console.log(thrownError)
                    // $('.loading').addClass('d-none')
                },
                complete: function(xhr, status) {
                    // $('.loading').addClass('d-none')
                }
            })
        })
    }
}
$(document).ready(function(){
    getForForm.getShowroom();
    getForForm.getDistrict();
    getForForm.getWard();
    getForForm.getPriceCar();
    // $("#showroom-form").attr('disabled', true);
    // $("#ward-form").attr('disabled', true);
    // $("#district-form").attr('disabled', true);
})


$(document).ready(function() {
  
  

      var $select2 = $('.city', $(this));
      
      // Reset
      $select2.parents('.form-group').removeClass('is-invalid');
      
      if ($select2.val() === '') {
        
        // Add is-invalid class when select2 element is required
        $('.city-required').show();
        
        // Stop submiting
        // e.preventDefault();
        return false;
      }
      });


$('.button-video3').click(function(){
    $('.showcopsss').click();
})


$(document).ready(function() {
    // $.validator.addMethod("valueNotEquals", function(value, element, arg) {
    //     return arg !== value;
    // }, "Value must not equal arg.");
  
    // // configure your validation
  
    // $(".form-car").validate({
    //     ignore: [],
    //     rules: {
    //       fullname: "required",
    //         phone: {
    //             required: true,
    //             minlength: 10
    //         },
    //         city: {
    //             required: true,
    //         },
    //         showroom: {
    //             required: true,
    //         },
    //         address: "required",
    //         email: {
    //             required: true,
    //             email: true,
    //             regxEmail: /^([a-zA-Z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
    //         },
    //         buy_date: "required",
    //         city: "required",
  
    //     },
    //     messages: {
    //         showroom: "Vui lòng chọn showroom",
    //         city: "Vui lòng chọn tỉnh thành",
    //         fullname: "Vui lòng nhập họ tên",
    //         phone: {
    //             required: "Vui lòng nhập số điện thoại",
    //             minlength: "Số điện thoại ít nhất là 10 số"
    //         },
    //         address: "Vui lòng nhập địa chỉ",
    //         email: {
    //             required: 'Vui lòng nhập email',
    //             email: 'Email không đúng định dạng!'
    //         },
    //         buy_date: "Vui lòng chọn thời gian",
  
    //     },
    //     submitHandler: function(form) {
    //         form.submit();
    //     }
  
  
    // });
  });