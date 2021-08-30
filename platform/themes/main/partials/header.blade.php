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
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->

<body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
    {!! apply_filters(THEME_FRONT_BODY, null) !!}


    <header class="header-pc">
        <div class="container-remake header-pc-wrap">
            <div class="header-logo">
                <img src="{{ Theme::asset()->url('images/logo.png') }}" alt="KIA NEW CERATO K3">
            </div>
            <ul class="list-menu font-buenos-bold font20" id="menu">
                <li class="menu_item" data-menuanchor="home">
                    <a href="#home" class="menu_link">
                        Trang chủ
                    </a>
                </li>
                <li class="menu_item">
                    <a href="#section2" class="menu_link">
                        Ngoại thất
                    </a>
                </li>
                <li class="menu_item">
                    <a href="#section3" class="menu_link">
                        Nội thất
                    </a>
                </li>
                <li class="menu_item">
                    <a href="#section4" class="menu_link">
                        Vận hành
                    </a>
                </li>
                <li class="menu_item">
                    <a href="#section5" class="menu_link">
                        An toàn
                    </a>
                </li>
                <li class="chose-car">
                    <a href="#section6">
                        CHỌN XE ONLINE
                    </a>
                </li>

            </ul>


        </div>
    </header>


    <div class="fixed-button">

        <a class="btn" href="#">
            <div class="wrap-button">
                <p class="font-buenos-bold">E-brochure</p>
                <div class="img-bt">
                    <img src="{{ Theme::asset()->url('images/brochure.png') }}" alt="KIA">
                </div>
            </div>
        </a>
        <a class="btn" href="#">
            <div class="wrap-button">
                <p class="font-buenos-bold">Facebook</p>
                <div class="img-bt">
                    <i class="fab fa-facebook-f"></i>
                </div>
            </div>
        </a>
        <a class="btn" href="#">
            <div class="wrap-button">
                <p class="font-buenos-bold">Youtube</p>
                <div class="img-bt">
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </a>
        <a class="btn" href="#">
            <div class="wrap-button">
                <p class="font-buenos-bold">Messenger</p>
                <div class="img-bt">
                    <i class="fas fa-comment-alt"></i>
                </div>
            </div>
        </a>
    </div>




   
    <div id="page-wrap">
