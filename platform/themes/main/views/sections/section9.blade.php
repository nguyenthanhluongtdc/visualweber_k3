<div class="section section9 fp-auto-height-responsive fp-section fp-completely" data-anchor="an-toan">
    <p class="tt-test font-kia-light">
        *Thông tin và hình ảnh chỉ mang tính chất tham khảo & có thể khác so với thực tế
    </p>
    <div class="container-remake section9-wrap">
        <div data-aos="fade-right" data-aos-offset="300" data-aos-duration="700" data-aos-easing="ease-in-sine">
            <p class="font-kia-bold font30">An toàn</p>
            <h3 class="font60 font-kia-bold">Vững tin cầm lái</h3>
        </div>
        
        <div class="list-image">
           
            <div class="left" data-aos="zoom-in-down" data-aos-offset="300" data-aos-duration="700" data-aos-easing="ease-in-sine">
                <div class="item-top">

                    @if (has_field($page, 'hinh_an_toan_so_1'))
                    <a data-fancybox="section9" data-animation-duration="700" data-src="#animatedModal1b" href="javascript:;">
                        <img src="{{  RvMedia::getImageUrl(get_field($page, 'hinh_an_toan_so_1')) }}" alt="{!! get_field($page, 'tieu_de_an_toan_so_1') !!}">
                        {{-- <img src="{{ Theme::asset()->url('images/section9/at1a.jpg') }}"> --}}

                    </a>
                    @endif
                    <div style="display: none;" id="animatedModal1b" class="animated-modal">

                        @if (has_field($page, 'tieu_de_an_toan_so_1'))

                        <h2 class="font-kia-bold font30">{!! get_field($page, 'tieu_de_an_toan_so_1') !!}</h2>
                        @endif
                        <div class="popup-content">
                            <div class="content-wrap">
                                @if (has_field($page, 'content_an_toan_so_1'))

                            <p class="font-kia-re font20">
                                {!! get_field($page, 'content_an_toan_so_1') !!}
                            </p>
                            @endif
                            @if (has_field($page, 'hinh_popup_so1'))
                            <img src="{{ RvMedia::getImageUrl(get_field($page, 'hinh_popup_so1')) }}" alt="{!! get_field($page, 'tieu_de_an_toan_so_1') !!}">
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="list-bottom">
                    <div class="list-bottom-item">
                        <a href="{{ Theme::asset()->url('images/section9/section92.jpg') }}" data-fancybox="section9"
                            data-caption="">
                            <img src="{{ Theme::asset()->url('images/section9/section92.jpg') }}">
                        </a>
                    </div>
                    <div class="list-bottom-item">
                        <a href="{{ Theme::asset()->url('images/section9/section94.jpg') }}" data-fancybox="section9"
                            data-caption="">
                            <img src="{{ Theme::asset()->url('images/section9/section94.jpg') }}">
                        </a>
                    </div>
                    <div class="list-bottom-item">
                        @if (has_field($page, 'hinh_an_toan_so_8'))
                        <a data-fancybox="section9" data-animation-duration="700" data-src="#animatedModal8" href="javascript:;">
                            <img src="{{  RvMedia::getImageUrl(get_field($page, 'hinh_an_toan_so_8')) }}" alt="{!! get_field($page, 'tieu_de_an_toan_so_8') !!}">
                        </a>
                        @endif
                        <div style="display: none;" id="animatedModal8" class="animated-modal">
    
                            @if (has_field($page, 'tieu_de_an_toan_so_8'))
    
                            <h2 class="font-buenos-bold font30">{!! get_field($page, 'tieu_de_an_toan_so_8') !!}</h2>
                            @endif
                            <div class="popup-content">
                                <div class="content-wrap">
                                    @if (has_field($page, 'content_an_toan_so_8'))
    
                                <p class="font-buenos-re font20">
                                    {!! get_field($page, 'content_an_toan_so_8') !!}
                                </p>
                                @endif
                                @if (has_field($page, 'hinh_popup_so8'))
                                <img src="{{ RvMedia::getImageUrl(get_field($page, 'hinh_popup_so8')) }}" alt="{!! get_field($page, 'tieu_de_an_toan_so_8') !!}">
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="right">
                <div class="item-right" data-aos="zoom-in-up" data-aos-offset="300" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-delay="200">
                    @if (has_field($page, 'hinh_an_toan_so_2'))
                    <a data-fancybox="section9" data-animation-duration="700" data-src="#animatedModal2" href="javascript:;">
                        <img src="{{  RvMedia::getImageUrl(get_field($page, 'hinh_an_toan_so_2')) }}" alt="{!! get_field($page, 'tieu_de_an_toan_so_2') !!}">
                    </a>
                    @endif
                    <div style="display: none;" id="animatedModal2" class="animated-modal">

                        @if (has_field($page, 'tieu_de_an_toan_so_2'))

                        <h2 class="font-kia-bold font30">{!! get_field($page, 'tieu_de_an_toan_so_2') !!}</h2>
                        @endif
                        <div class="popup-content">
                            <div class="content-wrap">
                                @if (has_field($page, 'content_an_toan_so_2'))

                            <p class="font-kia-re font20">
                                {!! get_field($page, 'content_an_toan_so_2') !!}
                            </p>
                            @endif
                            @if (has_field($page, 'hinh_popup_so2'))
                            <img src="{{ RvMedia::getImageUrl(get_field($page, 'hinh_popup_so2')) }}" alt="{!! get_field($page, 'tieu_de_an_toan_so_2') !!}">
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-right" data-aos="zoom-in-up" data-aos-offset="300" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-delay="400">
                    @if (has_field($page, 'hinh_an_toan_so_3'))
                    <a data-fancybox="section9" data-animation-duration="700" data-src="#animatedModal3" href="javascript:;">
                        <img src="{{  RvMedia::getImageUrl(get_field($page, 'hinh_an_toan_so_3')) }}" alt="{!! get_field($page, 'tieu_de_an_toan_so_3') !!}">
                    </a>
                    @endif
                    <div style="display: none;" id="animatedModal3" class="animated-modal">

                        @if (has_field($page, 'tieu_de_an_toan_so_3'))

                        <h2 class="font-kia-bold font30">{!! get_field($page, 'tieu_de_an_toan_so_3') !!}</h2>
                        @endif
                        <div class="popup-content">
                            <div class="content-wrap">
                                @if (has_field($page, 'content_an_toan_so_3'))

                            <p class="font-kia-re font20">
                                {!! get_field($page, 'content_an_toan_so_3') !!}
                            </p>
                            @endif
                            @if (has_field($page, 'hinh_popup_so3'))
                            <img src="{{ RvMedia::getImageUrl(get_field($page, 'hinh_popup_so3')) }}" alt="{!! get_field($page, 'tieu_de_an_toan_so_3') !!}">
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-right item-right2 item-cova" data-aos="zoom-in-up" data-aos-offset="300" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-delay="600">
                    @if (has_field($page, 'hinh_an_toan_so_4'))
                    <a data-fancybox="section9" data-animation-duration="700" data-src="#animatedModal4" href="javascript:;">
                        <img src="{{  RvMedia::getImageUrl(get_field($page, 'hinh_an_toan_so_4')) }}" alt="{!! get_field($page, 'tieu_de_an_toan_so_4') !!}">
                    </a>
                    @endif
                    <div style="display: none;" id="animatedModal4" class="animated-modal">

                        @if (has_field($page, 'tieu_de_an_toan_so_4'))

                        <h2 class="font-kia-bold font30">{!! get_field($page, 'tieu_de_an_toan_so_4') !!}</h2>
                        @endif
                        <div class="popup-content">
                            <div class="content-wrap">
                                @if (has_field($page, 'content_an_toan_so_4'))

                            <p class="font-kia-re font20">
                                {!! get_field($page, 'content_an_toan_so_4') !!}
                            </p>
                            @endif
                            @if (has_field($page, 'hinh_popup_so4'))
                            <img src="{{ RvMedia::getImageUrl(get_field($page, 'hinh_popup_so4')) }}" alt="{!! get_field($page, 'tieu_de_an_toan_so_4') !!}">
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="item-right" data-aos="zoom-in-up" data-aos-offset="300" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-delay="900">
                    <a href="{{ Theme::asset()->url('images/section9/section98.jpg') }}" data-fancybox="section9"
                        data-caption="">
                        <img src="{{ Theme::asset()->url('images/section9/section98.jpg') }}">
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
