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
                                // $('.showroom-book-a-car')[0].innerHTML = result.showroom;
                                $('select[name="showroom"]')[0].innerHTML = result.showroom;
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
                                console.log($('.customer__district'));
                                $('.customer__district')[0].innerHTML = result.district;
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
});