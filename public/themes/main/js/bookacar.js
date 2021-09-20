var Popup = {
    city:function(){
        if($('.city').length){
            var ignoreDiacritics = true;
            $('.ui.dropdown.city').dropdown({
                ignoreDiacritics: ignoreDiacritics,
                sortSelect: true,
                fullTextSearch:'exact',
                onChange: function(value, text) {
                    if(text){
                        $.ajax({
                            headers: {
                                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                    "content"
                                )
                            },
                            url: '/ajax/showroom',
                            method: "GET",
                            data: {
                                provinceId: value
                            },
                            dataType: "json",
                            beforeSend: function() {
                                $('.ui.dropdown.showroom').api('set loading');
                            },
                            success: function(result, status, xhr) {
                                for (let index = 0; index < $('select[name="showroom"]').length; index++) {
                                    $('select[name="showroom"]')[index].innerHTML = result.showroom;
                                }
                            },
                            error: function(xhr, status, error) {
                            },
                            complete: function(xhr, status) {
                                $('.ui.dropdown.showroom').api('remove loading');
                                $('.showroom-book-a-car').destroy();
                                $('.ui.dropdown.showroom').dropdown();
                            }
                        });
                    }
                }
            });
        }
    },

    customner__city:function(){
        if($('.customner__city').length){
            var ignoreDiacritics = true;
            $('.ui.dropdown.customner__city').dropdown({
                ignoreDiacritics: ignoreDiacritics,
                sortSelect: true,
                fullTextSearch:'exact',
                onChange: function(value, text) {
                    if(text){
                        $.ajax({
                            headers: {
                                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                    "content"
                                )
                            },
                            url: '/ajax/quanhuyen',
                            method: "GET",
                            data: {
                                provinceId: value
                            },
                            dataType: "json",
                            beforeSend: function() {
                                $('.ui.dropdown.customer__district').api('set loading');
                            },
                            success: function(result, status, xhr) {
                                for (let index = 0; index < $('select[name="customer__district"]').length; index++) {
                                    $('select[name="customer__district"]')[index].innerHTML = result.district;
                                }
                            },
                            error: function(xhr, status, error) {
                            },
                            complete: function(xhr, status) {
                                $('.ui.dropdown.customer__district').api('remove loading');
                                $('.ui.dropdown.customer__district').destroy();
                                $('.ui.dropdown.customer__district').dropdown();
                            }
                        });
                    }
                }
            });
        }
    },

    customer__district:function(){
        if($('.customer__district').length){
            var ignoreDiacritics = true;
            $('.ui.dropdown.customer__district').dropdown({
                ignoreDiacritics: ignoreDiacritics,
                sortSelect: true,
                fullTextSearch:'exact',
                onChange: function(value, text) {
                    if(text){
                        $.ajax({
                            headers: {
                                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                    "content"
                                )
                            },
                            url: '/ajax/xaphuong',
                            method: "GET",
                            data: {
                                districtId: value
                            },
                            dataType: "json",
                            beforeSend: function() {
                                $('.ui.dropdown.customer__ward').api('set loading');
                            },
                            success: function(result, status, xhr) {
                                for (let index = 0; index < $('select[name="customer__ward"]').length; index++) {
                                    $('select[name="customer__ward"]')[index].innerHTML = result.ward;
                                }
                            },
                            error: function(xhr, status, error) {
                            },
                            complete: function(xhr, status) {
                                $('.ui.dropdown.customer__ward').api('remove loading');
                                $('.ui.dropdown.customer__ward').destroy();
                                $('.ui.dropdown.customer__ward').dropdown();
                            }
                        });
                    }
                }
            });
        }
    }
}

$(document).ready(function() {
    if($('.showroom').length){
        var ignoreDiacritics = true;
        $('.ui.dropdown.showroom').dropdown({
            ignoreDiacritics: ignoreDiacritics,
            sortSelect: true,
            fullTextSearch:'exact',
        });
    }
    if($('.customer__district').length){
        var ignoreDiacritics = true;
        $('.ui.dropdown.customer__district').dropdown({
            ignoreDiacritics: ignoreDiacritics,
            sortSelect: true,
            fullTextSearch:'exact',
        });
    }
    if($('.customer__ward').length){
        var ignoreDiacritics = true;
        $('.ui.dropdown.customer__ward').dropdown({
            ignoreDiacritics: ignoreDiacritics,
            sortSelect: true,
            fullTextSearch:'exact',
        });
    }
    // City
    Popup.city();
    //customner city
    Popup.customner__city();
    //customner district
    Popup.customer__district();
});