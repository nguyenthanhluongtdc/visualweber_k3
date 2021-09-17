<div data-anchor="trang-chu" class="section section1 fp-auto-height-responsive fp-section fp-completely"
    style="background-image: url('{{Theme::asset()->url('images/section1/bgnew3.jpg') }}')">
   
    <div class="s1-pc">
       <div class="logo-pc">
        <img src="{{ Theme::asset()->url('images/logok3so1.png') }}" alt="">
       </div>
        <div class="number-wrap">
            <div class="access access1" >
                <img src="{{ Theme::asset()->url('images/section1/users.png') }}" alt="">
                <p class="number font-buenos-bold">@if (has_field($page, 'number_user'))
                    {!! get_field($page, 'number_user') !!}
                @endif</p>
                <p class="desc font-buenos-bold">LƯỢT TRUY CẬP</p>
            </div>
            <div class="access access2">
                <img src="{{ Theme::asset()->url('images/section1/icon2.png') }}" alt="">
                <p class="number font-kia-bold">@if (has_field($page, 'number_buy'))
                    {!! get_field($page, 'number_buy') !!}
                @endif</p>
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
        <img src="{{ Theme::asset()->url('images/section1/kv1mobie.jpg') }}" alt="" class="bg fit-cover">
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
            <img src="{{ Theme::asset()->url('images/logok3so1.png') }}" alt="logo">
        </div>
        <div class="bottom" style="background-image: url('{{ Theme::asset()->url('images/section1/bgmb.jpg') }}')">
            <div class="item" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="300">
                <div class="img img-con"><img src="{{ Theme::asset()->url('images/section1/icontop1.png') }}" alt=""></div>
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