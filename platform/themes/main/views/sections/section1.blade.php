<div data-anchor="trang-chu" class="section section1 fp-auto-height-responsive fp-section fp-completely"
    style="background-image: url('{{ Theme::asset()->url('images/section1/bannerkv1a.jpg') }}')">

    <div class="s1-pc">
        {{-- <div class="logo-pc">
            <img src="{{ Theme::asset()->url('images/logok3new.png') }}" alt="">
        </div> --}}
        <div class="number-wrap">
            <div class="access access1">
                <img src="{{ Theme::asset()->url('images/section1/users.png') }}" alt="">
                <p class="number font-buenos-bold">
                    @if (has_field($page, 'number_user'))
                        {!! get_field($page, 'number_user') !!}
                    @endif
                </p>
                <p class="desc font-buenos-bold">LƯỢT TRUY CẬP</p>
            </div>
            <div class="access access2">
                <img src="{{ Theme::asset()->url('images/section1/icon2.png') }}" alt="">
                <p class="number font-kia-bold">
                    @if (has_field($page, 'number_buy'))
                        {!! get_field($page, 'number_buy') !!}
                    @endif
                </p>
                <p class="desc font-kia-bold" style="text-transform: uppercase;">khách hàng<br>đặt mua xe</p>
            </div>
        </div>
        <div class="wrap-kp">
            <div class="icon-kp">
                <img src="{{ Theme::asset()->url('images/section1/khampha.png') }}" alt="">
            </div>
            <div class="chu">
                <img src="{{ Theme::asset()->url('images/section1/chu.png') }}" alt="">
            </div>
        </div>

    </div>







    <div class="s1-mobie">
        <div class="img-pri-s1">
            <img src="{{ Theme::asset()->url('images/section1/bannerkv1b.jpg')  }}" alt="" class="bg fit-cover">
            <div class="s1-icon-mobie">
                <div class="top">
                    <div class="access">
                        <img src="{{ Theme::asset()->url('images/section1/users.png') }}" alt="">
                        <p class="number font-kia-bold">
                            @if (has_field($page, 'number_user'))
                                {!! get_field($page, 'number_user') !!}
                            @endif
                        </p>
                        <p class="desc font-kia-bold" style="text-transform: uppercase;">lượt truy cập</p>
                    </div>
                    <div class="client">
                        <img src="{{ Theme::asset()->url('images/section1/icon2.png') }}" alt="">
                        <p class="number font-kia-bold">
                            @if (has_field($page, 'number_buy'))
                                {!! get_field($page, 'number_buy') !!}
                            @endif
                        </p>
                        <p class="desc font-kia-bold" style="text-transform: uppercase;">khách hàng <br> đặt mua xe</p>
                    </div>
                </div>
                <div class="wrap-kp menu2ne">
                    <div class="icon-kp item" data-menuanchor="ngoai-that">
                        <img src="{{ Theme::asset()->url('images/section1/khampha.png') }}" alt="">
                    </div>
                    <div class="chu item"  data-menuanchor="ngoai-that">
                        <img src="{{ Theme::asset()->url('images/section1/chu.png') }}" alt="">
                    </div>
                </div>

            </div>
            <div class="center">
                <img src="{{ Theme::asset()->url('images/logok3new.png') }}" alt="logoK3">
            </div>
            <ul class="bottom menu2ne"
                style="background-image: url('{{ Theme::asset()->url('images/section1/bgmb.jpg') }}')">
                <li class="item" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine"
                    data-aos-delay="300" data-menuanchor="ngoai-that">
                    <a href="#">
                        <div class="wrap-a">
                            <div class="img img-con"><img
                                    src="{{ Theme::asset()->url('images/section1/icontop1.png') }}" alt=""></div>
                            <p class="font-kia-light first">nhận diện mới</p>
                        </div>
                    </a>
                </li>
                <li class="item" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine"
                    data-aos-delay="600" data-menuanchor="noi-that">
                    <a href="#">
                        <div class="wrap-a">
                            <div class="img img-con2"><img
                                    src="{{ Theme::asset()->url('images/section1/icontop2.png') }}" alt=""></div>
                            <p class="font-kia-light second">kết nối<br>công nghệ</p>
                        </div>
                    </a>
                </li>
                <li class="item  menu_item" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine"
                    data-aos-delay="900" data-menuanchor="van-hanh">
                    <a href="#">
                        <div class="wrap-a">
                            <div class="img img-con3"> <img
                                    src="{{ Theme::asset()->url('images/section1/icontop3.png') }}" alt=""> </div>
                            <p class="font-kia-light">chế độ lái<br>thông minh</p>
                        </div>
                    </a>
                </li>
                <li class="item menu_item" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine"
                    data-aos-delay="900" data-menuanchor="an-toan">
                    <a href="#">
                        <div class="wrap-a">
                            <div class="img img-con4"> <img
                                    src="{{ Theme::asset()->url('images/section1/icontop4.png') }}" alt=""> </div>
                            <p class="font-kia-light">An toàn tối ưu</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

    </div>







</div>
