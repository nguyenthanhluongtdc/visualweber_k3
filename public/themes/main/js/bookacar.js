var Popup = {
    city:function(){
        if($('.city').length){
            var ignoreDiacritics = true;
            $('.ui.dropdown.city').dropdown({
                ignoreDiacritics: ignoreDiacritics,
                sortSelect: true,
                fullTextSearch:'exact',
                onChange: function(value, text, $choice) {
                    if(text){
                        $.ajax({
                            headers: {
                                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                    "content"
                                )
                            },
                            url: url_get_showroom,
                            method: "GET",
                            data: {
                                city: value
                            },
                            dataType: "json",
                            beforeSend: function() {
                                $('.ui.dropdown.showroom').api('set loading');
                            },
                            success: function(result, status, xhr) {
                                $('select[name="showroom"]')[0].innerHTML = result.html;
                            },
                            error: function(xhr, status, error) {
                            },
                            complete: function(xhr, status) {
                                $('.ui.dropdown.showroom').api('remove loading');
                                $('.ui.dropdown.showroom').destroy();
                                $('.ui.dropdown.showroom').dropdown();
                            }
                        });
                    }
                }
            });
        }
    }
}

$(document).ready(function() {
    // City
    Popup.city();
});