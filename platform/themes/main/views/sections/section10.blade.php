<div class="section section10 fp-auto-height-responsive fp-section fp-completely" data-anchor="dat-xe-truc-tuyen">
    <p class="tt-test tt-test2 font-kia-light">
        *Thông tin và hình ảnh chỉ mang tính chất tham khảo & có thể khác so với thực tế
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
                    <p class="font20 font-kia-re">The New K3</p>
                    <h5 class="font30 font-kia-bold">1.6 Premium</h5>
                </div>
                <div class="bottom">
                    <img src="{{ Theme::asset()->url('images/section10/xepri.png') }}">
                    <div class="content-item">
                        <p class="title font20 font-kia-bold">Tính năng nổi bật</p>
                        <ul class="list-content scrollable-content font18">
                            <li class="font-kia-re">- Màn hình đa thông tin 4.2”</li>
                            <li class="font-kia-re">- Màn hình giải trí AVN 10.25”</li>
                            <li class="font-kia-re">- Sưởi và làm mát hàng ghế trước</li>
                            <li class="font-kia-re">- Gương chiếu hậu chống chói tự động ECM</li>
                            <li class="font-kia-re">- Nhớ 2 vị trí ghế lái</li>
                            <li class="font-kia-re">- 6 túi khí an toàn, cảm biến hỗ trợ đỗ xe trước và sau</li>
                        </ul>
                        <div class="row-price font20 font-kia-bold">
                            <strong class="text-uppercase font-kia-bold">
                                GIÁ CÔNG BỐ:
                            </strong>
                            <b class="price">xxx.xxx.xxx VNĐ</b>
                        </div>

                        {{-- CODE FORM ĐẶT XE  --}}

                        {{-- <script>
                            $(document).ready(function() {
                                $('.click1').trigger('click');
                            });
                        </script> --}}
                        @php
                            $provinces = get_province_for_form();
                        @endphp

                        <div class="content-bottom none-pcc">
                            <a class="register click1 font-kia-bold font20 font-kia-re" id="pre-order-car" data-src="#animatedModal101"
                                 href="javascript:;" data-fancybox="muaxe1">
                                BẮT ĐẦU NGAY
                            </a>

                            <div style="
                                display: none;" id="animatedModal101"  class="animated-modal2">
                                <div class="form-buy-car">
                                    <div class="left">
                                        <div class="box-main">
                                            <div class="logo-pc">
                                                <img src="{{ Theme::asset()->url('images/logok3so1.png') }}" alt="">
                                            </div>
    
                                            <div class="chose-car-color">
                                                <!-- Tab panes -->
                                                <div class="tab-content tab-content-color2">
                                                    <div id="color1" class="container tab-pane active item-car-color "><br>
                                                        <img src="{{ Theme::asset()->url('images/form/whitepri.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div id="color2" class="container tab-pane item-car-color "><br>
                                                        <img src="{{ Theme::asset()->url('images/form/blue.webp') }}"
                                                            alt="">
                                                    </div>
                                                    <div id="color3" class="container tab-pane item-car-color "><br>
                                                        <img src="{{ Theme::asset()->url('images/form/black.webp') }}"
                                                            alt="">
                                                    </div>
                                                </div>
    
                                                <div class="left-bottom">
                                                    <div class="bottom--top">
                                                        <div class="info-other font-kia-bold mb-lg-4 mb-3 font30 text-center">
                                                            1.6 Premium
                                                        </div>
                                                        <p class="text-center">Vui lòng chọn màu sắc</p>
                                                        <ul class="nav nav-tabs tab-color-car2" role="tablist">
                                                            {{-- Blue 1 --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#color1" data-name="White Premium">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/white.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- White --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color2" data-name="Blue Premium">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue_1.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- Black --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color3" data-name="Black Premium">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/black.jpg') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- Blue --}}
                                                            {{-- <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color4">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li> --}}
                                                            {{-- Gray --}}
                                                            {{-- <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color5">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray.jpg') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li> --}}
                                                            {{-- Gray 1 --}}
                                                            {{-- <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color6">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray_1.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li> --}}
                                                            {{-- RED --}}
                                                            {{-- <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color7">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/red2.jpg') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li> --}}
        
                                                        </ul>
        
                                                        <h4 class="car-name font-kia-bold mt-lg-4 mt-3 text-center">
                                                            White Premium
                                                        </h4>
                                                    </div>
    
                                                </div>
                                            </div>
    
                                        </div>
                                        <p class="text-center box-des tt-test font-kia-light">
                                            <i>
                                                *Thông tin và hình ảnh chỉ mang tính chất tham khảo & có thể khác so với thực thế
                                            </i>
                                        </p>
                                    </div>
                                    <div class="right" style="background-image: url({{ Theme::asset()->url('images/form/bgform.jpg') }}); background-size: cover; background-repeat: no-repeat;">
                                        <form id="book-a-car" action="#" method="POST" class="form text-white">
                                            <h2 class="form__title text-center font50 text-uppercase text-white font-buenos-bold">ĐẶT XE TRỰC TUYẾN</h2>
                                            <div class="form__body">
                                                <p class="form__input">
                                                    <label for="city" class="font16">Tỉnh thành (*): </label>
                                                    <select name="city" id="city_buy_car" class="font-buenos-light ui search selection dropdown city w-100" required>
                                                        <option hidden value="" selected>Vui lòng chọn tỉnh thành</option>
                                                        @forelse(@$provinces as $row)
                                                            <option {{ old('city') == @$row->matp ? 'selected' : '' }}
                                                                value="{{ @$row->matp }}">{{ @$row->name }}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </p>

                                                <p class="form__input">
                                                    <label for="showroom" class="font16">Showroom (*): </label>
                                                    <select name="showroom" class="font-buenos-light ui search selection dropdown showroom w-100 showroom-book-a-car" required>
                                                        <option value="" selected>Vui lòng chọn showroom</option>
                                                    </select>
                                                </p>

                                                <div class="form__infoMore">
                                                    <div class="form__infoMore--wrap">
                                                        <ul>
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Giá công bố:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="car_price" data-price="685000000">
                                                                    685.000.000 VND
                                                                </span>
                                                            </li>
    
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                   Ưu đãi:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="car_discount">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>
    
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Giá sau ưu đãi:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="car_price_after_discount">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>
    
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Lệ phí trước bạ (*):
                                                                </span>
    
                                                                <span class="line__value font-buenos-light"  id="registration_fee">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>
    
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Thuế:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light"  id="fee">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>

                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Phí đăng kiểm(*):
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="registry_fee">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>

                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Phí đăng ký biển số:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="license_plate_fee">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>
                                                        </ul>
    
                                                        <p class="mt-3 font-buenos-light">
                                                            <i>
                                                                (*): Chi phí thực tế có thể thay đổi theo tỉnh thành
                                                            </i>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="form__total-cost text-center">
                                                    <div class="font-kia-bold font25 item text-uppercase">
                                                        <span class="font-buenos-bold">
                                                            tổng chi phí ước tính:
                                                        </span>

                                                        <span class="font-buenos-bold" id="car_price_total">
                                                            xxx.xxx
                                                        </span>
                                                    </div>
                                                    <p class="font-buenos-light">
                                                        (Tổng chi phí ước tính mang tính chất tham khảo. Vui lòng liên hệ Showroom để biết thêm chi tiết.)
                                                    </p>
                                                </div>

                                                <p class="form__input">
                                                    <label for="" class="font16 font-buenos-light">Thời gian nhận xe (*): </label>
                                                    <input name="date" type="date" class="date ui search selection dropdown">
                                                </p>

                                                <p class="form__input">
                                                    <label for="date" class="font16 font-buenos-light"> Khách hàng (*): </label>
                                                    <input name="customer_name" class="ui search selection dropdown" type="text" placeholder="Họ và tên">
                                                </p>

                                                <p class="form__input">
                                                    <label for="date" class="font16 font-buenos-light">Số điện thoại (*): </label>
                                                    <input name="customer_phone" class="ui search selection dropdown" type="text" placeholder="Nhập số điện thoại">
                                                </p>

                                                <p class="form__input">
                                                    <label for="date" class="font16 font-buenos-light">Địa chỉ liên hệ (*):</label>
                                                    <input name="customer_address" class="ui search selection dropdown" type="text" placeholder="Nhập địa chỉ liên hệ">
                                                </p>

                                                <div class="form__position">
                                                    <div class="item-right">
                                                        <select id="customer__city" name="customer__city"  class="font-buenos-light ui search selection dropdown customner__city" required>
                                                            <option value="" selected>Tỉnh/ Thành phố</option>
                                                            @forelse(@$provinces as $row)
                                                                <option {{ old('city') == @$row->matp ? 'selected' : '' }}
                                                                    value="{{ @$row->matp }}">{{ @$row->name }}</option>
                                                            @empty
                                                            @endforelse
                                                        </select>
    
                                                        <select id="customer__district" name="customer__district"  class="font-buenos-light ui search selection dropdown customer__district" required>
                                                            <option value="" selected>Quận/ Huyện</option>
                                                        </select>
    
                                                        <select id="customer__ward" name="customer__ward"  class="font-buenos-light ui search selection dropdown customer__ward" required>
                                                            <option value="" selected>Phường/ xã</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <p class="form__input">
                                                    <label for="date" class="font16 font-buenos-light">Email (*): </label>
                                                    <input name="customer_email" class="ui search selection dropdown" type="text" placeholder="Nhập thông tin email">
                                                </p>

                                                <p class="form__checkbox">
                                                    <input type="checkbox" name="accept" id="accept">
                                                    <label class="ml-3 mb-0 font16 font-buenos-light" for="accept">Đồng ý nhận thông tin từ KIA</label>
                                                </p>

                                                <p class="form__btnSubmit">
                                                    <button type="submit" class="text-uppercase font16 font-kia-bold">
                                                        đăng ký ngay
                                                    </button>
                                                </p>
                                            </div>
                                        </form>
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
                    <p class="font20 font-kia-re">The New K3</p>
                    <h5 class="font30 font-kia-bold">1.6 Luxury</h5>
                </div>
                <div class="bottom">
                    <img src="{{ Theme::asset()->url('images/section10/2luxu.png') }}">
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
                            <b class="price">xxx.xxx.xxx VNĐ</b>
                        </div>
                       
                        <div class="content-bottom none-pcc">
                            <a class="register font-kia-bold font20 font-kia-re" id="pre-order-car"  data-src="#animatedModal102"
                                href="javascript:;" data-fancybox="muaxe3b" class="">
                                BẮT ĐẦU NGAY
                            </a>
                            
                            {{-- modal  --}}
                            <div style="
                                display: none;" id="animatedModal102" class="animated-modal2">
                                <div class="form-buy-car">
                                    <div class="left">
                                        <div class="box-main">
                                            <div class="logo-pc">
                                                <img src="{{ Theme::asset()->url('images/logok3so1.png') }}" alt="">
                                            </div>
    
                                            <div class="chose-car-color">
                                                <!-- Tab panes -->
                                                <div class="tab-content tab-content-color2">
                                                    <div id="color21" class="container tab-pane active item-car-color "><br>
                                                        <img src="{{ Theme::asset()->url('images/form/whitepri.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div id="color22" class="container tab-pane item-car-color "><br>
                                                        <img src="{{ Theme::asset()->url('images/form/blue.webp') }}"
                                                            alt="">
                                                    </div>
                                                    <div id="color23" class="container tab-pane item-car-color "><br>
                                                        <img src="{{ Theme::asset()->url('images/form/black.webp') }}"
                                                            alt="">
                                                    </div>
                                                </div>
    
                                                <div class="left-bottom">
                                                    <div class="bottom--top">
                                                        <div class="info-other font-kia-bold mb-lg-4 mb-3 font30 text-center">
                                                            1.6 Luxury
                                                        </div>
        
                                                        <ul class="nav nav-tabs tab-color-car2" role="tablist">
                                                            {{-- Blue 1 --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#color21" data-name="White Luxury">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/white.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- White --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color22" data-name="Blue Luxury">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue_1.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- Black --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color23" data-name="Black Luxury">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/black.jpg') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
        
                                                        </ul>
        
                                                        <h4 class="car-name font-kia-bold mt-lg-4 mt-3 text-center">
                                                            White Luxury
                                                        </h4>
                                                    </div>
    
                                                </div>
                                            </div>
    
                                        </div>
                                        <p class="text-center box-des tt-test font-kia-light">
                                            <i>
                                                *Thông tin và hình ảnh chỉ mang tính chất tham khảo & có thể khác so với thực thế
                                            </i>
                                        </p>
                                    </div>
                                    <div class="right" style="background-image: url({{ Theme::asset()->url('images/form/bgform.jpg') }}); background-size: cover; background-repeat: no-repeat;">
                                        <form id="book-a-car" action="#" method="POST" class="form text-white">
                                            <h2 class="form__title text-center font50 text-uppercase text-white font-buenos-bold">ĐẶT XE TRỰC TUYẾN</h2>
                                            <div class="form__body">
                                                <p class="form__input">
                                                    <label for="city" class="font16">Tỉnh thành (*): </label>
                                                    <select name="city" id="city_buy_car" class="font-buenos-light ui search selection dropdown city w-100" required>
                                                        <option hidden value="" selected>Vui lòng chọn tỉnh thành</option>
                                                        @forelse(@$provinces as $row)
                                                            <option {{ old('city') == @$row->matp ? 'selected' : '' }}
                                                                value="{{ @$row->matp }}">{{ @$row->name }}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </p>

                                                <p class="form__input">
                                                    <label for="showroom" class="font16">Showroom (*): </label>
                                                    <select name="showroom" class="font-buenos-light ui search selection dropdown showroom w-100 showroom-book-a-car" required>
                                                        <option value="" selected>Vui lòng chọn showroom</option>
                                                    </select>
                                                </p>

                                                <div class="form__infoMore">
                                                    <div class="form__infoMore--wrap">
                                                        <ul>
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Giá công bố:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="car_price" data-price="639000000">
                                                                    639.000.000 VND
                                                                </span>
                                                            </li>
    
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                   Ưu đãi:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="car_discount">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>
    
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Giá sau ưu đãi:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="car_price_after_discount">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>
    
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Lệ phí trước bạ (*):
                                                                </span>
    
                                                                <span class="line__value font-buenos-light"  id="registration_fee">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>
    
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Thuế:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light"  id="fee">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>

                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Phí đăng kiểm(*):
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="registry_fee">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>

                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Phí đăng ký biển số:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="license_plate_fee">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>
                                                        </ul>
    
                                                        <p class="mt-3 font-buenos-light">
                                                            <i>
                                                                (*): Chi phí thực tế có thể thay đổi theo tỉnh thành
                                                            </i>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="form__total-cost text-center">
                                                    <div class="font-kia-bold font25 item text-uppercase">
                                                        <span class="font-buenos-bold">
                                                            tổng chi phí ước tính:
                                                        </span>

                                                        <span class="font-buenos-bold" id="car_price_total">
                                                            xxx.xxx
                                                        </span>
                                                    </div>
                                                    <p class="font-buenos-light">
                                                        (Tổng chi phí ước tính mang tính chất tham khảo. Vui lòng liên hệ Showroom để biết thêm chi tiết.)
                                                    </p>
                                                </div>

                                                <p class="form__input">
                                                    <label for="" class="font16 font-buenos-light">Thời gian nhận xe (*): </label>
                                                    <input name="date" type="date" class="date ui search selection dropdown">
                                                </p>

                                                <p class="form__input">
                                                    <label for="date" class="font16 font-buenos-light"> Khách hàng (*): </label>
                                                    <input name="customer_name" class="ui search selection dropdown" type="text" placeholder="Họ và tên">
                                                </p>

                                                <p class="form__input">
                                                    <label for="date" class="font16 font-buenos-light">Số điện thoại (*): </label>
                                                    <input name="customer_phone" class="ui search selection dropdown" type="text" placeholder="Nhập số điện thoại">
                                                </p>

                                                <p class="form__input">
                                                    <label for="date" class="font16 font-buenos-light">Địa chỉ liên hệ (*):</label>
                                                    <input name="customer_address" class="ui search selection dropdown" type="text" placeholder="Nhập địa chỉ liên hệ">
                                                </p>

                                                <div class="form__position">
                                                    <div class="item-right">
                                                        <select id="customer__city" name="customer__city"  class="font-buenos-light ui search selection dropdown customner__city" required>
                                                            <option value="" selected>Tỉnh/ Thành phố</option>
                                                            @forelse(@$provinces as $row)
                                                                <option {{ old('city') == @$row->matp ? 'selected' : '' }}
                                                                    value="{{ @$row->matp }}">{{ @$row->name }}</option>
                                                            @empty
                                                            @endforelse
                                                        </select>
    
                                                        <select id="customer__district" name="customer__district"  class="font-buenos-light ui search selection dropdown customer__district" required>
                                                            <option value="" selected>Quận/ Huyện</option>
                                                        </select>
    
                                                        <select id="customer__ward" name="customer__ward"  class="font-buenos-light ui search selection dropdown customer__ward" required>
                                                            <option value="" selected>Phường/ xã</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <p class="form__input">
                                                    <label for="date" class="font16 font-buenos-light">Email (*): </label>
                                                    <input name="customer_email" class="ui search selection dropdown" type="text" placeholder="Nhập thông tin email">
                                                </p>

                                                <p class="form__checkbox">
                                                    <input type="checkbox" name="accept" id="accept">
                                                    <label class="ml-3 mb-0 font16 font-buenos-light" for="accept">Đồng ý nhận thông tin từ KIA</label>
                                                </p>

                                                <p class="form__btnSubmit">
                                                    <button type="submit" class="text-uppercase font16 font-kia-bold">
                                                        đăng ký ngay
                                                    </button>
                                                </p>
                                            </div>
                                        </form>
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
                    <p class="font20 font-kia-re">The New K3</p>
                    <h5 class="font30 font-kia-bold">1.6 MT</h5>
                </div>
                <div class="bottom">
                    <img src="{{ Theme::asset()->url('images/section10/3mt.png') }}">
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
                            <b class="price">xxx.xxx.xxx VNĐ</b>
                        </div>
                        
                        <div class="content-bottom none-mobile">
                            <a class="register font-kia-bold font20 font-kia-re" id="pre-order-car" data-src="#animatedModal103"
                                href="javascript:;" data-fancybox="muaxe2b" class="">
                                BẮT ĐẦU NGAY
                            </a>
                            
                            {{-- modal  --}}
                            <div style="
                                display: none;" id="animatedModal103" class="animated-modal2">
                                <div class="form-buy-car">
                                    <div class="left">
                                        <div class="box-main">
                                            <div class="logo-pc">
                                                <img src="{{ Theme::asset()->url('images/logok3so1.png') }}" alt="">
                                            </div>
    
                                            <div class="chose-car-color">
                                                <!-- Tab panes -->
                                                <div class="tab-content tab-content-color2">
                                                    <div id="color31" class="container tab-pane active item-car-color"><br>
                                                        <img src="{{ Theme::asset()->url('images/form/whitepri.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div id="color32" class="container tab-pane item-car-color "><br>
                                                        <img src="{{ Theme::asset()->url('images/form/blue.webp') }}"
                                                            alt="">
                                                    </div>
                                                    <div id="color33" class="container tab-pane item-car-color "><br>
                                                        <img src="{{ Theme::asset()->url('images/form/black.webp') }}"
                                                            alt="">
                                                    </div>
                                                </div>
    
                                                <div class="left-bottom">
                                                    <div class="bottom--top">
                                                        <div class="info-other font-kia-bold mb-lg-4 mb-3 font30 text-center">
                                                            1.6 MT
                                                        </div>
        
                                                        <ul class="nav nav-tabs tab-color-car2" role="tablist">
                                                            {{-- Blue 1 --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#color31" data-name="White MT">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/white.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- White --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color32" data-name="Blue MT">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue_1.webp') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
                                                            {{-- Black --}}
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#color33" data-name="Black MT">
                                                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/black.jpg') }}"
                                                                        alt="K3">
                                                                </a>
                                                            </li>
        
                                                        </ul>
        
                                                        <h4 class="car-name font-kia-bold mt-lg-4 mt-3 text-center">
                                                            White MT
                                                        </h4>
                                                    </div>
    
                                                </div>
                                            </div>
    
                                        </div>
                                        <p class="text-center box-des tt-test font-kia-light">
                                            <i>
                                                *Thông tin và hình ảnh chỉ mang tính chất tham khảo & có thể khác so với thực thế
                                            </i>
                                        </p>
                                    </div>
                                    <div class="right" style="background-image: url({{ Theme::asset()->url('images/form/bgform.jpg') }}); background-size: cover; background-repeat: no-repeat;">
                                        <form id="book-a-car" action="#" method="POST" class="form text-white">
                                            <h2 class="form__title text-center font50 text-uppercase text-white font-buenos-bold">ĐẶT XE TRỰC TUYẾN</h2>
                                            <div class="form__body">
                                                <p class="form__input">
                                                    <label for="city" class="font16">Tỉnh thành (*): </label>
                                                    <select name="city" id="city_buy_car" class="font-buenos-light ui search selection dropdown city w-100" required>
                                                        <option hidden value="" selected>Vui lòng chọn tỉnh thành</option>
                                                        @forelse(@$provinces as $row)
                                                            <option {{ old('city') == @$row->matp ? 'selected' : '' }}
                                                                value="{{ @$row->matp }}">{{ @$row->name }}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </p>

                                                <p class="form__input">
                                                    <label for="showroom" class="font16">Showroom (*): </label>
                                                    <select name="showroom" class="font-buenos-light ui search selection dropdown showroom w-100 showroom-book-a-car" required>
                                                        <option value="" selected>Vui lòng chọn showroom</option>
                                                    </select>
                                                </p>

                                                <div class="form__infoMore">
                                                    <div class="form__infoMore--wrap">
                                                        <ul>
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Giá công bố:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="car_price" data-price="544000000">
                                                                    544.000.000 VND
                                                                </span>
                                                            </li>
    
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                   Ưu đãi:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="car_discount">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>
    
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Giá sau ưu đãi:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="car_price_after_discount">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>
    
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Lệ phí trước bạ (*):
                                                                </span>
    
                                                                <span class="line__value font-buenos-light"  id="registration_fee">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>
    
                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Thuế:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light"  id="fee">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>

                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Phí đăng kiểm(*):
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="registry_fee">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>

                                                            <li class="line">
                                                                <span class="line__title font16 font-buenos-light">
                                                                    Phí đăng ký biển số:
                                                                </span>
    
                                                                <span class="line__value font-buenos-light" id="license_plate_fee">
                                                                    xxx.xxx.xxx VND
                                                                </span>
                                                            </li>
                                                        </ul>
    
                                                        <p class="mt-3 font-buenos-light">
                                                            <i>
                                                                (*): Chi phí thực tế có thể thay đổi theo tỉnh thành
                                                            </i>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="form__total-cost text-center">
                                                    <div class="font-kia-bold font25 item text-uppercase">
                                                        <span class="font-buenos-bold">
                                                            tổng chi phí ước tính:
                                                        </span>

                                                        <span class="font-buenos-bold" id="car_price_total">
                                                            xxx.xxx
                                                        </span>
                                                    </div>
                                                    <p class="font-buenos-light">
                                                        (Tổng chi phí ước tính mang tính chất tham khảo. Vui lòng liên hệ Showroom để biết thêm chi tiết.)
                                                    </p>
                                                </div>

                                                <p class="form__input">
                                                    <label for="" class="font16 font-buenos-light">Thời gian nhận xe (*): </label>
                                                    <input name="date" type="date" class="date ui search selection dropdown">
                                                </p>

                                                <p class="form__input">
                                                    <label for="date" class="font16 font-buenos-light"> Khách hàng (*): </label>
                                                    <input name="customer_name" class="ui search selection dropdown" type="text" placeholder="Họ và tên">
                                                </p>

                                                <p class="form__input">
                                                    <label for="date" class="font16 font-buenos-light">Số điện thoại (*): </label>
                                                    <input name="customer_phone" class="ui search selection dropdown" type="text" placeholder="Nhập số điện thoại">
                                                </p>

                                                <p class="form__input">
                                                    <label for="date" class="font16 font-buenos-light">Địa chỉ liên hệ (*):</label>
                                                    <input name="customer_address" class="ui search selection dropdown" type="text" placeholder="Nhập địa chỉ liên hệ">
                                                </p>

                                                <div class="form__position">
                                                    <div class="item-right">
                                                        <select id="customer__city" name="customer__city"  class="font-buenos-light ui search selection dropdown customner__city" required>
                                                            <option value="" selected>Tỉnh/ Thành phố</option>
                                                            @forelse(@$provinces as $row)
                                                                <option {{ old('city') == @$row->matp ? 'selected' : '' }}
                                                                    value="{{ @$row->matp }}">{{ @$row->name }}</option>
                                                            @empty
                                                            @endforelse
                                                        </select>
    
                                                        <select id="customer__district" name="customer__district"  class="font-buenos-light ui search selection dropdown customer__district" required>
                                                            <option value="" selected>Quận/ Huyện</option>
                                                        </select>
    
                                                        <select id="customer__ward" name="customer__ward"  class="font-buenos-light ui search selection dropdown customer__ward" required>
                                                            <option value="" selected>Phường/ xã</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <p class="form__input">
                                                    <label for="date" class="font16 font-buenos-light">Email (*): </label>
                                                    <input name="customer_email" class="ui search selection dropdown" type="text" placeholder="Nhập thông tin email">
                                                </p>

                                                <p class="form__checkbox">
                                                    <input type="checkbox" name="accept" id="accept">
                                                    <label class="ml-3 mb-0 font16 font-buenos-light" for="accept">Đồng ý nhận thông tin từ KIA</label>
                                                </p>

                                                <p class="form__btnSubmit">
                                                    <button type="submit" class="text-uppercase font16 font-kia-bold">
                                                        đăng ký ngay
                                                    </button>
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    const carPriceUrl = '{{route('public.ajax.carprice')}}'
</script>