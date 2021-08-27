<?php

use Platform\Theme\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
     */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
     */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before'             => function (Theme $theme) {

        },
        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme'  => function (Theme $theme) {
            // You may use this event to set up your assets.

            $theme->asset()->add('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
            $theme->asset()->add('fancybox', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
            $theme->asset()->add('swipper', '//unpkg.com/swiper/swiper-bundle.min.css');
            $theme->asset()->add('aos_style', '//unpkg.com/aos@2.3.1/dist/aos.css');
            $theme->asset()->add('animate_style', '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
            $theme->asset()->add('fullpage_css', '//cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css');
            // $theme->asset()->add('tailwinds_css', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css');
            // $theme->asset()->add('dropdown_css', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/dropdown.min.css');
            // $theme->asset()->add('transition_js', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/transition.min.css');
            $theme->asset()->add('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
            $theme->asset()->add('carousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
            $theme->asset()->add('carousel_thumb', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
            $theme->asset()->add('jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/base/jquery-ui.css');
            
            $theme->asset()->usePath()->add('style', 'css/common.css',[],[],time());

            $theme->asset()->container('footer')->add('jquery', '//code.jquery.com/jquery-3.5.1.min.js');
            $theme->asset()->container('footer')->add('fancybox', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
            $theme->asset()->container('footer')->add('fullpage_js', '//cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.js');
            $theme->asset()->container('footer')->add('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js');
            $theme->asset()->container('footer')->add('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');
            $theme->asset()->container('footer')->add('swipperjs', '//unpkg.com/swiper/swiper-bundle.min.js');
            $theme->asset()->container('footer')->add('aos_js', '//unpkg.com/aos@2.3.1/dist/aos.js');
            // $theme->asset()->container('footer')->add('dropdown_js', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/dropdown.min.js');
            // $theme->asset()->container('footer')->add('transition_js', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/transition.min.js');
            $theme->asset()->container('footer')->add('validate', '//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js');
			$theme->asset()->container('footer')->add('validate-method', '//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js');
            // $theme->asset()->container('footer')->add('sweetalert_js', 'https://cdn.jsdelivr.net/npm/sweetalert2@10'); 
            $theme->asset()->container('footer')->add('carousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'); 
            $theme->asset()->container('footer')->add('carousel_thumb', '//cdn.jsdelivr.net/npm/owl.carousel2.thumbs@0.1.8/dist/owl.carousel2.thumbs.min.js');          
            $theme->asset()->container('footer')->add('jquery_ui', '//code.jquery.com/ui/1.10.3/jquery-ui.js');
            // $theme->asset()->container('footer')->usePath()->add('script', 'js/common.js',[],[],time());
            $theme->asset()->container('footer')->usePath()->add('script', 'js/fullpage.js',[],[],time());
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function (Theme $theme) {
            },
        ],
    ],
];
