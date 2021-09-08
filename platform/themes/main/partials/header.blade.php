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
                <li class="menu_item" data-menuanchor="trang-chu">
                    <a href="{{ route('public.index') }}#trang-chu" class="menu_link">
                        Trang chủ
                    </a>
                </li>
                <li class="menu_item" data-menuanchor="ngoai-that">
                    <a href="{{ route('public.index') }}#ngoai-that" class="menu_link">
                        Ngoại thất
                    </a>
                </li>
                <li class="menu_item" data-menuanchor="noi-that">
                    <a href="{{ route('public.index') }}#noi-that" class="menu_link">
                        Nội thất
                    </a>
                </li>
                <li class="menu_item" data-menuanchor="van-hanh">
                    <a href="{{ route('public.index') }}#van-hanh" class="menu_link">
                        Vận hành
                    </a>
                </li>
                <li class="menu_item" data-menuanchor="an-toan">
                    <a href="{{ route('public.index') }}#an-toan" class="menu_link">
                        An toàn
                    </a>
                </li>
                <li class="chose-car" data-menuanchor="chon-xe-online">
                    <a href="{{ route('public.index') }}#chon-xe-online">
                        CHỌN XE ONLINE
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
                <ul class="list-menu font-buenos-bold font20" id="menu">
                    <li class="menu_item close-menu2" data-menuanchor="trang-chu">
                        <a href="{{ route('public.index') }}#trang-chu" class="menu_link">
                            Trang chủ
                        </a>
                    </li>
                    <li class="menu_item close-menu2" data-menuanchor="ngoai-that">
                        <a href="{{ route('public.index') }}#ngoai-that" class="menu_link">
                            Ngoại thất
                        </a>
                    </li>
                    <li class="menu_item close-menu2" data-menuanchor="noi-that">
                        <a href="{{ route('public.index') }}#noi-that" class="menu_link">
                            Nội thất
                        </a>
                    </li>
                    <li class="menu_item close-menu2" data-menuanchor="van-hanh">
                        <a href="{{ route('public.index') }}#van-hanh" class="menu_link">
                            Vận hành
                        </a>
                    </li>
                    <li class="menu_item close-menu2" data-menuanchor="an-toan">
                        <a href="{{ route('public.index') }}#an-toan" class="menu_link">
                            An toàn
                        </a>
                    </li>
                    <li class="chose-car close-menu2" data-menuanchor="chon-xe-online">
                        <a href="{{ route('public.index') }}#chon-xe-online">
                            CHỌN XE ONLINE
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
            <a class="" href=" #">
                <div class="wrap-button">
                    <p class="font-buenos-bold show-p">E-brochure</p>
                    <div class="img-bt">
                        <img src="{{ Theme::asset()->url('images/brochure.png') }}" alt="KIA">
                    </div>
                </div>
            </a>
        </div>
        <div class="item-bt">
            <a class="" href=" #">
                <div class="wrap-button">
                    <p class="font-buenos-bold show-p">Facebook</p>
                    <div class="img-bt">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="item-bt">
            <a class="" href=" #">
                <div class="wrap-button">
                    <p class="font-buenos-bold show-p">Youtube</p>
                    <div class="img-bt">
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="item-bt">
            <a class="" href=" #">
                <div class="wrap-button">
                    <p class="font-buenos-bold show-p">Messenger</p>
                    <div class="img-bt">
                        <i class="fas fa-comment-alt"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="dangky">
        <div class="form-dangky">
            <h3 class="font-buenos-bold">ĐĂNG KÝ THÔNG TIN</h3>
            <div class="close-dangky">
                <i class="fas fa-times"></i>
            </div>
            {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'contact-form']) !!}
            <div class="contact-form-row contact-form-row-top">
                <div class="contact-column-12">
                    <div class="contact-form-group">
                        <label for="" class="font20 font-buenos-light">Họ và tên:</label>
                           <input type=" text"
                            class="contact-form-input font20 font-buenos-light" name="name" value="{{ old('name') }}"
                            id="contact_name2" placeholder="">
                            <p class="error-msg font-buenos-re">{{ $errors->first('name') }}</p>
                    </div>
                </div>
            </div>
            <div class="contact-form-row">
                <div class="contact-column-12">
                    <div class="contact-form-group">
                        <label for="" class="font20 font-buenos-light">Số điện thoại:</label>
                           <input type=" text"
                            class="contact-form-input font20 font-buenos-light" name="phone"
                            value="{{ old('phone') }}" id="contact_phone2" placeholder="">
                            <p class="error-msg font-buenos-re">{{ $errors->first('phone') }}</p>
                    </div>
                </div>
            </div>
            <div class="contact-form-row">
                <div class="contact-column-12">
                    <div class="contact-form-group">
                        <label for="" class="font20 font-buenos-light">Tỉnh/Thành phố:</label>
                          <select name="address" id="contact_address2" class="font20 font-buenos-light">
                            <option value="">
                            <option value="An Giang">An Giang
                            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                            <option value="Bắc Giang">Bắc Giang
                            <option value="Bắc Kạn">Bắc Kạn
                            <option value="Bạc Liêu">Bạc Liêu
                            <option value="Bắc Ninh">Bắc Ninh
                            <option value="Bến Tre">Bến Tre
                            <option value="Bình Định">Bình Định
                            <option value="Bình Dương">Bình Dương
                            <option value="Bình Phước">Bình Phước
                            <option value="Bình Thuận">Bình Thuận
                            <option value="Bình Thuận">Bình Thuận
                            <option value="Cà Mau">Cà Mau
                            <option value="Cao Bằng">Cao Bằng
                            <option value="Đắk Lắk">Đắk Lắk
                            <option value="Đắk Nông">Đắk Nông
                            <option value="Điện Biên">Điện Biên
                            <option value="Đồng Nai">Đồng Nai
                            <option value="Đồng Tháp">Đồng Tháp
                            <option value="Đồng Tháp">Đồng Tháp
                            <option value="Gia Lai">Gia Lai
                            <option value="Hà Giang">Hà Giang
                            <option value="Hà Nam">Hà Nam
                            <option value="Hà Tĩnh">Hà Tĩnh
                            <option value="Hải Dương">Hải Dương
                            <option value="Hậu Giang">Hậu Giang
                            <option value="Hòa Bình">Hòa Bình
                            <option value="Hưng Yên">Hưng Yên
                            <option value="Khánh Hòa">Khánh Hòa
                            <option value="Kiên Giang">Kiên Giang
                            <option value="Kon Tum">Kon Tum
                            <option value="Lai Châu">Lai Châu
                            <option value="Lâm Đồng">Lâm Đồng
                            <option value="Lạng Sơn">Lạng Sơn
                            <option value="Lào Cai">Lào Cai
                            <option value="Long An">Long An
                            <option value="Nam Định">Nam Định
                            <option value="Nghệ An">Nghệ An
                            <option value="Ninh Bình">Ninh Bình
                            <option value="Ninh Thuận">Ninh Thuận
                            <option value="Phú Thọ">Phú Thọ
                            <option value="Quảng Bình">Quảng Bình
                            <option value="Quảng Bình">Quảng Bình
                            <option value="Quảng Ngãi">Quảng Ngãi
                            <option value="Quảng Ninh">Quảng Ninh
                            <option value="Quảng Trị">Quảng Trị
                            <option value="Sóc Trăng">Sóc Trăng
                            <option value="Sơn La">Sơn La
                            <option value="Tây Ninh">Tây Ninh
                            <option value="Thái Bình">Thái Bình
                            <option value="Thái Nguyên">Thái Nguyên
                            <option value="Thanh Hóa">Thanh Hóa
                            <option value="Thừa Thiên Huế">Thừa Thiên Huế
                            <option value="Tiền Giang">Tiền Giang
                            <option value="Trà Vinh">Trà Vinh
                            <option value="Tuyên Quang">Tuyên Quang
                            <option value="Vĩnh Long">Vĩnh Long
                            <option value="Vĩnh Phúc">Vĩnh Phúc
                            <option value="Yên Bái">Yên Bái
                            <option value="Phú Yên">Phú Yên
                            <option value="Tp.Cần Thơ">Tp.Cần Thơ
                            <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                            <option value="Tp.Hải Phòng">Tp.Hải Phòng
                            <option value="Tp.Hà Nội">Tp.Hà Nội
                            <option value="TP  HCM">TP HCM
                                </select>
                    </div>
                </div>
            </div>
            <div class="contact-form-group-bt">
                <button type="submit" class="contact-button font-buenos-bold font20">Xác nhận</button>
            </div>

            <div class="contact-form-group">
                <div class="contact-message contact-success-message" style="display: none"></div>
                <div class="contact-message contact-error-message" style="display: none"></div>
            </div>
            {!! Form::close() !!}

        </div>
    </div>



    <div id="page-wrap">
