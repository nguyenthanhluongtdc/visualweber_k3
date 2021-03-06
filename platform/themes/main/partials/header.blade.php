<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if IE 9]><html class="ie ie9" lang="{{ app()->getLocale() }}"><![endif]-->
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Roboto')) }}"
        rel="stylesheet" type="text/css">
    <!-- CSS Library-->


    
    

    <style>
        :root {
            --color-1st: {{ theme_option('primary_color', '#bead8e') }};
            --primary-font: '{{ theme_option('primary_font', 'Roboto') }}', sans-serif;
        }

    </style>

    {!! Theme::header() !!}

    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PKR4CN5');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MXTQH9S');</script>
    <!-- End Google Tag Manager -->

</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->

<body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKR4CN5"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXTQH9S"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    {!! apply_filters(THEME_FRONT_BODY, null) !!}


    <header class="header-pc">
    <div class="container-remake header-pc-wrap">
        <div class="header-logo">
           <a href="https://kiamotorsvietnam.com.vn/" target="_blank">
            <img src="{{ Theme::asset()->url('images/logo.png') }}" alt="KIA NEW CERATO K3">
            </a>
        </div>
        <ul class="list-menu font-kia-bold font20" id="menu">
           
            <li class="menu_item menu_item-wi" data-menuanchor="ngoai-that">
                <a href="{{ route('public.index') }}#ngoai-that" class="menu_link">
                    <div class="img">
                        <img src="{{ Theme::asset()->url('images/section1/icontop1.png') }}" alt=""  class="menu1">
                    </div>
                    <p>Nh???n di???n m???i</p>
                </a>
            </li>
            <li class="menu_item menu_item-wi" data-menuanchor="noi-that">
                <a href="{{ route('public.index') }}#noi-that" class="menu_link">
                    <div class="img">
                        <img src="{{ Theme::asset()->url('images/section1/icontop2.png') }}" alt=""  class="menu2">
                    </div>
                    <p>K???t n???i c??ng ngh???</p>
                </a>
            </li>
            <li class="menu_item menu_item-wi" data-menuanchor="van-hanh">
                <a href="{{ route('public.index') }}#van-hanh" class="menu_link">
                    <div class="img">
                        <img src="{{ Theme::asset()->url('images/section1/icontop3.png') }}" alt="" class="menu3">
                    </div>
                    <p>Ch??? ????? l??i th??ng minh</p>
                </a>
            </li>
            <li class="menu_item menu_item-wi" data-menuanchor="an-toan">
                <a href="{{ route('public.index') }}#an-toan" class="menu_link">
                    <div class="img">
                        <img src="{{ Theme::asset()->url('images/section1/icontop4.png') }}" alt=""  class="menu4">
                    </div>
                    <p>An to??n t???i ??u</p>
                </a>
            </li>
            <li class="chose-car" data-menuanchor="dat-xe-truc-tuyen">
                <a href="{{ route('public.index') }}#dat-xe-truc-tuyen">
                    ?????T XE TR???C TUY???N
                </a>
            </li>

        </ul>


    </div>

</header>

<header class="header-mobie">
    <div class="container-remake header-mobie-wrap">
        <div class="left open-menu">
            <i class="fas fa-bars"></i>
        </div>
        <div class="content-show">
            <div class="close-menu">
                <i class="fas fa-times"></i>
            </div>
            <ul class="list-menu font-kia-bold font20" id="menu">
                <li class="menu_item close-menu2 menu_item-wi" data-menuanchor="ngoai-that">
                <a href="{{ route('public.index') }}#ngoai-that" class="menu_link">
                    <div class="img">
                        <img src="{{ Theme::asset()->url('images/section1/icontop1.png') }}" alt=""  class="menu1" style="width: 60px">
                    </div>
                    <p>Nh???n di???n m???i</p>
                </a>
            </li>
            <li class="menu_item close-menu2 menu_item-wi" data-menuanchor="noi-that">
                <a href="{{ route('public.index') }}#noi-that" class="menu_link">
                    <div class="img">
                        <img src="{{ Theme::asset()->url('images/section1/icontop2.png') }}" alt=""  class="menu2" style="width: 40px">
                    </div>
                    <p>K???t n???i c??ng ngh???</p>
                </a>
            </li>
            <li class="menu_item close-menu2 menu_item-wi" data-menuanchor="van-hanh">
                <a href="{{ route('public.index') }}#van-hanh" class="menu_link">
                    <div class="img">
                        <img src="{{ Theme::asset()->url('images/section1/icontop3.png') }}" alt="" class="menu3" style="width: 36px">
                    </div>
                    <p>Ch??? ????? l??i th??ng minh</p>
                </a>
            </li>
            <li class="menu_item close-menu2 menu_item-wi" data-menuanchor="an-toan">
                <a href="{{ route('public.index') }}#an-toan" class="menu_link">
                    <div class="img">
                        <img src="{{ Theme::asset()->url('images/section1/icontop4.png') }}" alt=""  class="menu4" style="width: 50px">
                    </div>
                    <p>An to??n t???i ??u</p>
                </a>
            </li>
            <li class="chose-car close-menu2" data-menuanchor="dat-xe-truc-tuyen">
                <a href="{{ route('public.index') }}#dat-xe-truc-tuyen">
                    ?????T XE TR???C TUY???N
                </a>
            </li>
            </ul>
        </div>
        <div class="header-logo">
            <img src="{{ Theme::asset()->url('images/logo.png') }}" alt="KIA NEW CERATO K3">
        </div>
        <div class="right">
            <i class="fas fa-search"></i>
        </div>
    </div>
</header>
<div class="fixed-button" data-aos="fade-left" data-aos-offset="300" data-aos-duration="700"
    data-aos-easing="ease-in-sine">

    <div class="item-bt">
        <a class="" href="{{ Theme::asset()->url('brochures/E-BROCHURE K3-2.pdf') }}" download" target="_blank">
            <div class="wrap-button">
                <p class="font-kia-bold show-p">E-brochure</p>
                <div class="img-bt">
                    <img src="{{ Theme::asset()->url('images/brochure.png') }}" alt="KIA">
                </div>
            </div>
        </a>
    </div>
    <div class="item-bt">
        <a class="" href="https://kiamotorsvietnam.com.vn/lien-he" target="_blank">
            <div class="wrap-button">
                <p class="font-buenos-bold show-p">Li??n h??? (Hotline)</p>
                <div class="img-bt icon-phoner">
                    <i class="fas fa-phone-volume"></i>
                </div>
            </div>
        </a>
    </div>
    <div class="item-bt">
        <a class="" href="https://kiamotorsvietnam.com.vn/dai-ly" target="_blank">
            <div class="wrap-button">
                <p class="font-kia-bold show-p">H??? th???ng Showroom</p>
                <div class="img-bt">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
            </div>
        </a>
    </div>
    <div class="item-bt d-none">
        <a class="" href=" #">
            <div class="wrap-button">
                <p class="font-kia-bold show-p">Messenger</p>
                <div class="img-bt">
                    <i class="fas fa-comment-alt"></i>
                </div>
            </div>
        </a>
    </div>
    <div class="moveTop">
        <a class="" href=" #">
            <div class="wrap-buttonn">
                <p class="font-kia-bold show-p bttun-to-top">V??? trang ?????u</p>
                <div class="img-bt">
                    <i class="fas fa-arrow-up"></i>
                </div>
               
            </div>
        </a>
    </div>
</div>


<button id="moveDown">
    <span class="arrow">
        <img class="mw-100" src="{{Theme::asset()->url('/images/bottom.png')}}" alt="">
    </span>
</button>



<div class="camon">
    <div class="close-popup">
            <i class="fas fa-times"></i>
        </div>
    <div class="popup-content">
        <h2 class="font-kia-bold font30">????NG K?? TH??NH C??NG!</h2>
    </div>
</div>

<div class="please-select-product">
    <div class="close-popup-please-select-product">
            <i class="fas fa-times"></i>
        </div>
    <div class="popup-content">
        <h2 class="font-kia-bold font30">Vui l??ng ch???n m??u xe!</h2>
    </div>
</div>












<div id="page-wrap">
   
