<div data-anchor="trang-chu" class="section section1 fp-auto-height-responsive fp-section fp-completely"
    style="background-image: url('{{ RvMedia::getImageUrl(get_field($page, 'img_bgs_section1')) }}')">
     <!-- Messenger Plugin chat Code -->
     {{-- @dd($page); --}}
    <div class="s1-pc">
        <div class="statistical">
            <div class="access" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                <img src="{{ Theme::asset()->url('images/section1/users.png') }}" alt="">
                <p class="number font-buenos-bold">@if (has_field($page, 'number_user'))
                    {!! get_field($page, 'number_user') !!}
                @endif</p>
                {{-- <p class="number font-buenos-bold">16 450</p> --}}
                <p class="desc font-buenos-bold">LƯỢT TRUY CẬP</p>
            </div>
            <div class="client" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="300">
                <img src="{{ Theme::asset()->url('images/section1/icon2.png') }}" alt="">
                <p class="number font-kia-bold">@if (has_field($page, 'number_buy'))
                    {!! get_field($page, 'number_buy') !!}
                @endif</p>
                <p class="desc font-kia-bold" style="text-transform: uppercase;">khách hàng <br> đặt mua xe</p>
            </div>
        </div>
    
    
        <div class="section1-footer container-remake">
            <div class="left" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">
                <img src="{{ Theme::asset()->url('images/section1/logok31.png') }}" alt="logo">
                <h3 class="desc font-kia-light">PHONG CÁCH SỐNG THÔNG MINH</h3>
            </div>
            <div class="right">
                <div class="item"  >
                    <div class="img"><img src="{{ Theme::asset()->url('images/section1/iconcar.png') }}" alt=""></div>
                    <p class="font-kia-light">nhận diện mới</p>
                </div>
                <div class="item" >
                    <div class="img"><img src="{{ Theme::asset()->url('images/section1/iconconnect.png') }}" alt=""></div>
                    <p class="font-kia-light">kết nối <br> công nghệ</p>
                </div>
                <div class="item" >
    
                    <div class="img"> <img src="{{ Theme::asset()->url('images/section1/icondrive.png') }}" alt=""> </div>
                    <p class="font-kia-light">chế độ lái <br> thông minh</p>
                </div>
            </div>
        </div>
    </div>
    <div class="s1-mobie">
       <div class="img-pri-s1">
        <img src="{{ Theme::asset()->url('images/section1/hinhmb1.jpg') }}" alt="" class="bg fit-cover">
        {{-- <img src="{{ Theme::asset()->url('images/section1/banners1.jpg') }}" alt="" class="bg"> --}}
        <div class="s1-icon-mobie">
            <div class="top">
                <div class="access">
                    <img src="{{ Theme::asset()->url('images/section1/users.png') }}" alt="">
                    <p class="number font-kia-bold">@if (has_field($page, 'number_user'))
                        {!! get_field($page, 'number_user') !!}
                    @endif</p>
                    <p class="desc font-kia-bold" style="text-transform: uppercase;">lượt truy cập</p>
                </div>
                <div class="client" >
                    <img src="{{ Theme::asset()->url('images/section1/icon2.png') }}" alt="">
                    <p class="number font-kia-bold">@if (has_field($page, 'number_buy'))
                        {!! get_field($page, 'number_buy') !!}
                    @endif</p>
                    <p class="desc font-kia-bold" style="text-transform: uppercase;">khách hàng <br> đặt mua xe</p>
                </div>
            </div>
           
          
        </div>
        <div class="center">
            <img src="{{ Theme::asset()->url('images/section1/logok31.png') }}" alt="logo">
            <h3 class="desc font-kia-light">PHONG CÁCH SỐNG THÔNG MINH</h3>
        </div>
        <div class="bottom" style="background-image: url('{{ Theme::asset()->url('images/section1/bgmb.jpg') }}')">
            <div class="item" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="300">
                <div class="img"><img src="{{ Theme::asset()->url('images/section1/iconcar.png') }}" alt=""></div>
                <p class="font-kia-light first">nhận diện mới</p>
            </div>
            <div class="item" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="600">
                <div class="img"><img src="{{ Theme::asset()->url('images/section1/iconconnect.png') }}" alt=""></div>
                <p class="font-kia-light second">kết nối công nghệ</p>
            </div>
            <div class="item" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="900">

                <div class="img"> <img src="{{ Theme::asset()->url('images/section1/icondrive.png') }}" alt=""> </div>
                <p class="font-kia-light">chế độ lái thông minh</p>
            </div>
        </div>
       </div>

    </div>
    

    
    

   

</div>