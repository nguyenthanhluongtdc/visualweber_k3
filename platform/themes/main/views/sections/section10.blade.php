<div class="section section10 fp-auto-height-responsive fp-section fp-completely" data-anchor="dat-xe-truc-tuyen">
    <p class="tt-test tt-test2 font-kia-light">
        *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với thực tế
    </p>
    <div class="container-remake section10-wrap">
        <h2 class="text-uppercase font-kia-bold font40 text-center mb-0" data-aos="fade-left" data-aos-offset="300"
            data-aos-duration="700" data-aos-easing="ease-in-sine">ĐẶT XE TRỰC TUYẾN</h2>
        <h3 class="font30 font-kia-bold" data-aos="fade-left" data-aos-offset="300" data-aos-duration="700"
            data-aos-easing="ease-in-sine" data-aos-delay="300">Các dòng sản phẩm</h3>
        <div class="list-section10">
            <div class="item" data-aos="fade-up" data-aos-offset="300" data-aos-duration="500"
                data-aos-easing="ease-in-sine" data-aos-delay="300">
                <div class="top">
                    <p class="font20 font-kia-re">The new K3</p>
                    <h5 class="font30 font-kia-bold">1.6 Premium</h5>
                </div>
                <div class="bottom">
                    <img src="{{ Theme::asset()->url('images/section10/xe1.png') }}">
                    <div class="content-item">
                        <p class="title font20 font-kia-bold">Tính năng nổi bật</p>
                        <ul class="list-content scrollable-content font18">
                            <li class="font-kia-re">- Màn hình đa thông tin 4.2”</li>
                            <li class="font-kia-re">- Màn hình giải trí AVN 10.25”</li>
                            <li class="font-kia-re">- Sưởi và làm mát hàng ghế trước</li>
                            <li class="font-kia-re">- Gương chiếu hậu chống chói tự động ECM</li>
                            <li class="font-kia-re">- Nhớ 2 vị trí ghế lái</li>
                            <li class="font-kia-re">- 6 túi khí an toàn, cảm biến hỗ trợ đỗ xe trước sau</li>
                        </ul>
                        <div class="row-price font20 font-kia-bold">
                            <strong class="text-uppercase font-kia-bold">
                                GIÁ CÔNG BỐ:
                            </strong>
                            <b class="price">
                                <span>{!! get_field($page, 'gia_xe_premium') ? number_format(get_field($page, 'gia_xe_premium'),0,',','.') : '...' !!}</span> VNĐ
                            </b>
                        </div>

                        {{-- CODE FORM ĐẶT XE --}}

                        {{-- <script>
                            $(document).ready(function() {
                                $('.click1').trigger('click');
                            });
                        </script> --}}
                        @php
                            $provinces = get_province_for_form();
                        @endphp

                        <div class="content-bottom none-pcc">
                            <a class="register click1 font-kia-bold font20 font-kia-re" id="pre-order-car"
                                data-src="#animatedModal101" href="javascript:;" data-fancybox="muaxe1">
                                BẮT ĐẦU NGAY
                            </a>

                            <div style="
                                display: none;" id="animatedModal101" class="animated-modal2">
                                <div class="form-buy-car">
                                    <div class="left">
                                        <div class="box-main">
                                            <div class="logo-pc">
                                                <img src="{{ Theme::asset()->url('images/logok3form.png') }}" alt="">
                                            </div>

                                            <div class="chose-car-color">
                                                <!-- Tab panes -->
                                                <div class="tab-content tab-content-color2">
                                                    @for($i=1;$i<=7;$i++)
                                                        <div id="color{{$i}}" class="container tab-pane {{$i==1 ? 'active' : ''}} item-car-color ">
                                                            <br>
                                                            <img src="{{ Theme::asset()->url('images/form/xe/premium/'.$i.'.png?v=2') }}"alt="">
                                                        </div>
                                                    @endfor
                                                </div>

                                                <div class="left-bottom">
                                                    <div class="bottom--top">
                                                        <div
                                                            class="info-other font-kia-bold mb-lg-4 mb-3 font30 text-center">
                                                            1.6 Premium
                                                        </div>
                                                        <p class="text-center ont-kia-light">Vui lòng chọn màu sắc</p>
                                                        <ul class="nav nav-tabs tab-color-car2" role="tablist">
                                                            {{-- Blue 1 --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab"
                                                                    href="#color1" data-vi="TRẮNG NGỌC TRAI" data-name="Glacial White Pearl">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/white.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- White --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab"
                                                                    href="#color2" data-name="Mineral Blue " data-vi="XANH NƯỚC BIỂN ">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue_1.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- Black --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab"
                                                                    href="#color3" data-name="Aurora Black Pearl " data-vi="ĐEN">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/black.jpg') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- Blue --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color4" data-name="Blue Premium" data-vi="XANH SẪM">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue2-1.png') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- Gray 1 --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color5" data-name="Sleek Sliver" data-vi="BẠC">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray_1.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- Gray --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color6" data-name="Steel Grey" data-vi="XÁM">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray.jpg') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- RED --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color7" data-name="Runway Red" data-vi="ĐỎ">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/red2.jpg') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                        </ul>

                                                        <h4 class="car-name name-vi font-kia-bold mt-lg-4 mt-3 mb-0 text-center text-uppercase">
                                                            Trắng ngọc trai
                                                        </h4>
                                                        <h4 class="car-name name-en font-kia-light m-0 text-center" style="">
                                                            Glacial White Pearl
                                                        </h4>
                                                        <p class="font-kia-light text-mobie">
                                                            <i>
                                                                *Thông tin và hình ảnh chỉ mang tính chất tham khảo và
                                                                có thể khác so với thực tế
                                                            </i>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <p class="text-center box-des tt-test font-kia-light">
                                            <i>
                                                *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so
                                                với thực tế
                                            </i>
                                        </p>
                                    </div>
                                    @if (has_field($page, 'gia_xe_premium'))
                                        @php $a =  get_field($page, 'gia_xe_premium');
                                        @endphp
                                    @endif
                                    @if (has_field($page, 'gia_uu_dai_premium'))
                                    @php $cda =  get_field($page, 'gia_uu_dai_premium');
                                    @endphp
                                     @else 
                                        @php $cda =  0;
                                        @endphp
                                     
                                     @endif
                                    <div class="right"
                                        style="background-image: url({{ Theme::asset()->url('images/form/bgform.jpg') }}); background-size: cover; background-repeat: no-repeat;">
                                        @includeIf('theme.main::views.templates.form',['car_type'=>'1.6 Premium','modal'=>'animatedModal101','car_color'=>'','car_price'=>$a ?? 0, 'car_discount'=>$cda ?? 0])
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


            <div class="item" data-aos="fade-up" data-aos-offset="300" data-aos-duration="500"
                data-aos-easing="ease-in-sine" data-aos-delay="600">
                <div class="top">
                    <p class="font20 font-kia-re">The new K3</p>
                    <h5 class="font30 font-kia-bold">1.6 Luxury</h5>
                </div>
                <div class="bottom">
                    <img src="{{ Theme::asset()->url('images/section10/xe2.png') }}">
                    <div class="content-item">
                        <p class="title font20 font-kia-bold">Tính năng nổi bật </p>
                        <ul class="list-content scrollable-content font18">
                            <li class="font-kia-re">- Màn hình đa thông tin 3.5”</li>
                            <li class="font-kia-re">- Màn hình giải trí AVN 8”</li>
                            <li class="font-kia-re">- Tính năng khởi động từ xa</li>
                            <li class="font-kia-re">- Ghế lái chỉnh điện, cửa sổ trời</li>
                            <li class="font-kia-re">- Cảm biến hỗ trợ đỗ xe sau</li>
                        </ul>
                        <div class="row-price font20 font-kia-bold">
                            <strong class="text-uppercase font-kia-bold">
                                GIÁ CÔNG BỐ:
                            </strong>
                            <b class="price">
                                <span>{!! get_field($page, 'gia_xe_luxury') ? number_format(get_field($page, 'gia_xe_luxury'),0,',','.') : '...' !!}</span> VNĐ
                            </b>
                        </div>

                        <div class="content-bottom none-pcc">
                            <a class="register font-kia-bold font20 font-kia-re" id="pre-order-car"
                                data-src="#animatedModal102" href="javascript:;" data-fancybox="muaxe3b"
                                class="">
                                BẮT ĐẦU NGAY
                            </a>
                            
                            {{-- modal --}}
                            <div style="
                                display: none;" id="animatedModal102" class="animated-modal2">
                                <div class="form-buy-car">
                                    <div class="left">
                                        <div class="box-main">
                                            <div class="logo-pc">
                                                <img src="{{ Theme::asset()->url('images/logok3form.png') }}" alt="">
                                            </div>

                                            <div class="chose-car-color">
                                                <!-- Tab panes -->
                                                <div class="tab-content tab-content-color2">
                                                    @for($i=1;$i<=7;$i++)
                                                        <div id="color2{{$i}}" class="container tab-pane {{$i==1 ? 'active' : ''}} item-car-color ">
                                                            <br>
                                                            <img src="{{ Theme::asset()->url('images/form/xe/'.$i.'.png?v=1') }}"alt="">
                                                        </div>
                                                    @endfor
                                                </div>

                                                <div class="left-bottom">
                                                    <div class="bottom--top">
                                                        <div
                                                            class="info-other font-kia-bold mb-lg-4 mb-3 font30 text-center">
                                                            1.6 Luxury
                                                        </div>

                                                        <p class="text-center ont-kia-light">Vui lòng chọn màu sắc</p>
                                                        <ul class="nav nav-tabs tab-color-car2" role="tablist">
                                                            {{-- Blue 1 --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab"
                                                                    href="#color21" data-vi="TRẮNG NGỌC TRAI" data-name="Glacial White Pearl">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/white.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- White --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab"
                                                                    href="#color22" data-name="Mineral Blue " data-vi="XANH NƯỚC BIỂN ">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue_1.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- Black --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab"
                                                                    href="#color23" data-name="Aurora Black Pearl " data-vi="ĐEN">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/black.jpg') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- Blue --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color24" data-name="Blue Premium" data-vi="XANH SẪM">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue2-1.png') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- Gray 1 --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color26" data-name="Sleek Sliver" data-vi="BẠC">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray_1.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- Gray --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color25" data-name="Steel Grey" data-vi="XÁM">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray.jpg') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- RED --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color27" data-name="Runway Red" data-vi="ĐỎ">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/red2.jpg') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <h4 class="car-name name-vi font-kia-bold mt-lg-4 mt-3 mb-0 text-center text-uppercase">
                                                            Trắng ngọc trai
                                                        </h4>
                                                        <h4 class="car-name name-en font-kia-light m-0 text-center" style="">
                                                            Glacial White Pearl
                                                        </h4>
                                                        <p class="font-kia-light text-mobie">
                                                            <i>
                                                                *Thông tin và hình ảnh chỉ mang tính chất tham khảo và
                                                                có thể khác so với thực tế
                                                            </i>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <p class="text-center box-des tt-test font-kia-light">
                                            <i>
                                                *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so
                                                với thực tế
                                            </i>
                                        </p>
                                    </div>
                                    @if (has_field($page, 'gia_xe_luxury'))
                                    @php $b =  get_field($page, 'gia_xe_luxury');
                                    @endphp
                                    @endif
                                    @if (has_field($page, 'gia_uu_dai_luxury'))
                                    @php $cdb =  get_field($page, 'gia_uu_dai_luxury');
                                    @endphp
                                     @else 
                                        @php $cdb =  0;
                                        @endphp
                                     
                                    @endif

                                     
                                    <div class="right"
                                        style="background-image: url({{ Theme::asset()->url('images/form/bgform.jpg') }}); background-size: cover; background-repeat: no-repeat;">
                                        @includeIf('theme.main::views.templates.form',['car_type'=>'1.6 Luxury','modal'=>'animatedModal103','car_color'=>'','car_price'=>$b ?? 0 , 'car_discount'=>$cdb])
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="item" data-aos="fade-up" data-aos-offset="300" data-aos-duration="500"
            data-aos-easing="ease-in-sine" data-aos-delay="900">
            <div class="top">
                <p class="font20 font-kia-re">The new K3</p>
                <h5 class="font30 font-kia-bold">1.6 MT</h5>
            </div>
            <div class="bottom">
                <img src="{{ Theme::asset()->url('images/section10/3mt3.png') }}">
                <div class="content-item">
                    <p class="title font20 font-kia-bold">Tính năng nổi bật </p>
                    <ul class="list-content scrollable-content font18">
                        <li class="font-kia-re">- Màn hình giải trí AVN 8”</li>
                        <li class="font-kia-re">- Hệ thống âm thanh 6 loa</li>
                        <li class="font-kia-re">- Cửa gió cho hàng ghế 2</li>
                        <li class="font-kia-re">- Hệ thống cân bằng điện tử ESC + HAC</li>
                        <li class="font-kia-re">- Camera lùi</li>
                    </ul>
                    <div class="row-price font20 font-kia-bold">
                        <strong class="text-uppercase  ">
                            GIÁ CÔNG BỐ:
                        </strong>
                        <b class="price">
                            <span>{!! get_field($page, 'gia_xe_mt') ? number_format(get_field($page, 'gia_xe_mt'),0,',','.') : '...' !!}</span> VNĐ
                        </b>
                    </div>

                    <div class="content-bottom none-mobile">
                        <a class="register font-kia-bold font20 font-kia-re" id="pre-order-car"
                            data-src="#animatedModal103" href="javascript:;" data-fancybox="muaxe2b"
                            class="">
                                BẮT ĐẦU NGAY
                            </a>
                            
                            {{-- modal --}}
                            <div style="
                            display: none;" id="animatedModal103" class="animated-modal2">
                            <div class="form-buy-car">
                                <div class="left">
                                    <div class="box-main">
                                        <div class="logo-pc">
                                            <img src="{{ Theme::asset()->url('images/logok3form.png') }}" alt="">
                                        </div>

                                        <div class="chose-car-color">
                                            <!-- Tab panes -->
                                            <div class="tab-content tab-content-color2">
                                                @for($i=1;$i<=7;$i++)
                                                        <div id="color3{{$i}}" class="container tab-pane {{$i==1 ? 'active' : ''}} item-car-color ">
                                                            <br>
                                                            <img src="{{ Theme::asset()->url('images/form/xe/'.$i.'.png?v=1') }}"alt="">
                                                        </div>
                                                    @endfor
                                            </div>

                                            <div class="left-bottom">
                                                <div class="bottom--top">
                                                    <div
                                                        class="info-other font-kia-bold mb-lg-4 mb-3 font30 text-center">
                                                        1.6 MT
                                                    </div>

                                                    <p class="text-center ont-kia-light">Vui lòng chọn màu sắc</p>
                                                    <ul class="nav nav-tabs tab-color-car2" role="tablist">
                                                        {{-- Blue 1 --}}
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab"
                                                                href="#color31" data-vi="TRẮNG NGỌC TRAI" data-name="Glacial White Pearl">
                                                                <img src="{{ Theme::asset()->url('images/360_color_thumb/white.webp') }}"
                                                                    alt="K3">
                                                            </a>
                                                        </li>
                                                        {{-- White --}}
                                                        <li class="nav-item">
                                                            <a class="nav-link " data-toggle="tab"
                                                                href="#color32" data-name="Mineral Blue " data-vi="XANH NƯỚC BIỂN ">
                                                                <img src="{{ Theme::asset()->url('images/360_color_thumb/blue_1.webp') }}"
                                                                    alt="K3">
                                                            </a>
                                                        </li>
                                                        {{-- Black --}}
                                                        <li class="nav-item">
                                                            <a class="nav-link " data-toggle="tab"
                                                                href="#color33" data-name="Aurora Black Pearl " data-vi="ĐEN">
                                                                <img src="{{ Theme::asset()->url('images/360_color_thumb/black.jpg') }}"
                                                                    alt="K3">
                                                            </a>
                                                        </li>
                                                        {{-- Blue --}}
                                                        <li class="nav-item">
                                                            <a class="nav-link " data-toggle="tab" href="#color34" data-name="Blue Premium" data-vi="XANH SẪM">
                                                                <img src="{{ Theme::asset()->url('images/360_color_thumb/blue2-1.png') }}"
                                                                    alt="K3">
                                                            </a>
                                                        </li>
                                                        {{-- Gray 1 --}}
                                                        <li class="nav-item">
                                                            <a class="nav-link " data-toggle="tab" href="#color36" data-name="Sleek Sliver" data-vi="BẠC">
                                                                <img src="{{ Theme::asset()->url('images/360_color_thumb/gray_1.webp') }}"
                                                                    alt="K3">
                                                            </a>
                                                        </li>
                                                        {{-- Gray --}}
                                                        <li class="nav-item">
                                                            <a class="nav-link " data-toggle="tab" href="#color35" data-name="Steel Grey" data-vi="XÁM">
                                                                <img src="{{ Theme::asset()->url('images/360_color_thumb/gray.jpg') }}"
                                                                    alt="K3">
                                                            </a>
                                                        </li>
                                                        {{-- RED --}}
                                                        <li class="nav-item">
                                                            <a class="nav-link " data-toggle="tab" href="#color37" data-name="Runway Red" data-vi="ĐỎ">
                                                                <img src="{{ Theme::asset()->url('images/360_color_thumb/red2.jpg') }}"
                                                                    alt="K3">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h4 class="car-name name-vi font-kia-bold mt-lg-4 mt-3 mb-0 text-center text-uppercase">
                                                        Trắng ngọc trai
                                                    </h4>
                                                    <h4 class="car-name name-en font-kia-light m-0 text-center" style="">
                                                        Glacial White Pearl
                                                    </h4>
                                                    <p class="font-kia-light text-mobie">
                                                        <i>
                                                            *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có
                                                            thể khác so với thực tế
                                                        </i>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <p class="text-center box-des tt-test font-kia-light">
                                        <i>
                                            *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với
                                            thực thế
                                        </i>
                                    </p>
                                </div>
                                @if (has_field($page, 'gia_xe_mt'))
                                @php $c =  get_field($page, 'gia_xe_mt');
                                @endphp
                                @endif
                                @if (has_field($page, 'gia_uu_dai_mt'))
                                @php $cdc =  get_field($page, 'gia_uu_dai_mt');
                                @endphp
                                     @else 
                                        @php $cdc =  0;
                                        @endphp
                                     
                                 @endif

                                <div class="right"
                                    style="background-image: url({{ Theme::asset()->url('images/form/bgform.jpg') }}); background-size: cover; background-repeat: no-repeat;">
                                    @includeIf('theme.main::views.templates.form',['car_type'=>'1.6 MT','modal'=>'animatedModal103','car_color'=>'','car_price'=>$c ?? 0, 'car_discount'=>$cdc])
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- <div class="mobie-showw">
    <p class="font-kia-light tt-text-mobie tt-text-mobie2">
        *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với thực tế
    </p>
</div> --}}
</div>

<script>
    const carPriceUrl = '{{ route('public.ajax.carprice') }}'
    $(document).ready(function() {
        @if (count($errors) && old('modal'))
            $(`a[data-src="#{{ old('modal') }}"]`).click();
            var srcModal = '#{{ old('modal') }}';
            var carPrice = 0
            var total = 0
            var phi_truoc_ba = 0
            var discount = 0
            var priceAfterDiscount = 0;
            carPrice = $(srcModal + ' #car_price').data('price')
            $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: carPriceUrl,
            data: {
            cityId: {{ old('city') }}
            },
            method: "GET",
            dataType: "json",
            beforeSend: function() {
            // $('.loading').removeClass('d-none')
            // $("#ward-form").attr('disabled', true);
            // $('#ward-form').html('<option selected value="">Vui lòng chọn Phường/Xã</option>')
            },
            success: function (data) {
            // console.log(data);
            phi_truoc_ba = carPrice*data.phi_truoc_ba/100
            priceAfterDiscount = carPrice - discount
            var gtgt = carPrice*10/100
            total = priceAfterDiscount + phi_truoc_ba + gtgt + data.phi_dang_ky_bien_so + data.phi_dang_kiem_xe
            // console.log(total);
            $(srcModal + ' #registration_fee').html(Helper.covertMoney(phi_truoc_ba))
            $(srcModal + ' #car_discount').html(Helper.covertMoney(discount))
            $(srcModal + ' #car_price_after_discount').html(Helper.covertMoney(priceAfterDiscount))
            $(srcModal + ' #fee').html(Helper.covertMoney(gtgt))
            $(srcModal + ' #registry_fee').html(Helper.covertMoney(data.phi_dang_kiem_xe))
            $(srcModal + ' #license_plate_fee').html(Helper.covertMoney(data.phi_dang_ky_bien_so))
            $(srcModal + ' #car_price_total').html(Helper.covertMoney(total))
            $(srcModal + ' input[name="total_price"]')[0].value = total
            },
            error: function (xhr, thrownError) {
            console.log(xhr.responseText);
            console.log(thrownError)
            // $('.loading').addClass('d-none')
            },
            complete: function(xhr, status) {
            // $('.loading').addClass('d-none')
            }
            })
        @endif
    });
</script>
<style>
    .error {
        color: red
    }

</style>



<script>
   
</script>
