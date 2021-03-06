<div class="section section3 fp-auto-height-responsive fp-section fp-completely" data-anchor="hinh-360">
    <p class="tt-test font-kia-light">
        *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với thực tế
    </p>
    <div class="logok3">
        <div class="container-remake">
            <img src="{{ Theme::asset()->url('images/logok3new.png') }}" alt="logo-k3">
        </div>
    </div>
    <div class="container-remake section3-wrap">
        <ul class="list-tab-section3 nav nav-tabs" role="tablist">
            <div class="border-dotter"
                style="background-image: url('{{ Theme::asset()->url('images/section3/borderdt.png') }}')">

            </div>
            <div class="border-dotter-mb"
                style="background-image: url('{{ Theme::asset()->url('images/section3/borderdt.png') }}')">
            </div>
         
            <li class="nav-item" data-aos="fade-right" data-aos-offset="300" data-aos-duration="700"
                data-aos-easing="ease-in-sine" data-aos-delay="600">
                <a class="nav-link active" data-toggle="tab" href="#section3a">
                    <div class="item-tab-wrap">
                        <div class="left">
                            <img src="{{ Theme::asset()->url('images/section3/icontab1.png') }}" alt=""
                                class="icontab">
                            <img src="{{ Theme::asset()->url('images/section3/icontab2.png') }}" alt=""
                                class="icontab-active">
                        </div>
                        <div class="right">
                            <p class="top font20 font-kia-re">The New K3</p>
                            <p class="bottom font25 font-kia-bold">1.6 Premium</p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="nav-item" data-aos="fade-right" data-aos-offset="300" data-aos-duration="700"
                data-aos-easing="ease-in-sine" data-aos-delay="900">
                <a class="nav-link" data-toggle="tab" href="#section3c">
                    <div class="item-tab-wrap">
                        <div class="left">
                            <img src="{{ Theme::asset()->url('images/section3/icontab1.png') }}" alt=""
                                class="icontab">
                            <img src="{{ Theme::asset()->url('images/section3/icontab2.png') }}" alt=""
                                class="icontab-active">
                        </div>
                        <div class="right">
                            <p class="top font20 font-kia-re">The New K3</p>
                            <p class="bottom font25 font-kia-bold">1.6 Luxury</p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="nav-item" data-aos="fade-right" data-aos-offset="300" data-aos-duration="700"
            data-aos-easing="ease-in-sine" data-aos-delay="900">
            <a class="nav-link" data-toggle="tab" href="#section3d">
                <div class="item-tab-wrap">
                    <div class="left">
                        <img src="{{ Theme::asset()->url('images/section3/icontab1.png') }}" alt=""
                            class="icontab">
                        <img src="{{ Theme::asset()->url('images/section3/icontab2.png') }}" alt=""
                            class="icontab-active">
                    </div>
                    <div class="right">
                        <p class="top font20 font-kia-re">The New K3</p>
                        <p class="bottom font25 font-kia-bold">1.6 MT</p>
                    </div>
                </div>
            </a>
        </li>
        </ul>
        <div class="content-tab-section3 tab-content">
               {{-- Hình premium  --}}
            <div id="section3a" class="tab-pane active">
                {{-- tab content seclect car --}}
                <div class="content-tab-wrap">
                    <div class="slider-car">
                        {{-- hình xe chính  --}}
                     
                        <div class="tab-content" data-aos="fade-down" data-aos-easing="ease-out-cubic"
                            data-aos-duration="1000">
                             {{-- Blue 01 --}}
                             <div id="tabcar06" class="container tab-pane item-car-color active"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/blue_1/"
                                    data-filename="M4B_{index}.png" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                                <div class="car-name">
                                    <h4 class="font-kia-bold mt-lg-4 mt-3 text-center font20">
                                        XANH NƯỚC BIỂN
                                    </h4>
                                    <P class="desc font-kia-light">
                                        Mineral Blue
                                    </P>
                                </div>
                                
                            </div>
                            {{-- White --}}
                            <div id="tabcar01" class="container tab-pane item-car-color "><br>
                                {{-- <div class="cloudimage-360" data-folder="/themes/main/images/360/white/"
                                    data-filename="SWP_{index}.png" data-amount="31" data-spin-reverse="true"></div>
                                <div class="ring360"> --}}

                                    <div class="cloudimage-360" data-folder="/themes/main/images/360/tranga/"
                                    data-filename="SWP_{index}.png" data-amount="30" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                                <div class="car-name">
                                    <h4 class="font-kia-bold mt-lg-4 mt-3 text-center font20">
                                        TRẮNG NGỌC TRAI
                                    </h4>
                                    <P class="desc font-kia-light">
                                        Glacial White Pearl
                                    </P>
                                </div>
                            </div>
                            {{-- Black --}}
                            <div id="tabcar02" class="container tab-pane item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/black/"
                                    data-filename="ABP_{index}.png" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                                <div class="car-name">
                                    <h4 class="font-kia-bold mt-lg-4 mt-3 text-center font20">
                                        ĐEN
                                    </h4>
                                    <P class="desc font-kia-light">
                                        Aurora Black Pearl
                                    </P>
                                </div>
                            </div>



                             {{-- Blue --}}
                             <div id="tabcar03" class="container tab-pane item-car-color "><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/xanh/"
                                    data-filename="M4B_{index}.png" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                                <div class="car-name">
                                    <h4 class="font-kia-bold mt-lg-4 mt-3 text-center font20">
                                        XANH SẪM
                                    </h4>
                                    <P class="desc font-kia-light">
                                        Deep Chroma Blue
                                    </P>
                                </div>
                            </div>
                           
                            {{-- Gray --}}
                            <div id="tabcar04" class="container tab-pane item-car-color"><br>
                                {{-- <div class="cloudimage-360" data-folder="/themes/main/images/360/gray/"
                                    data-filename="ABT_{index}.webp" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360"> --}}
                                    <div class="cloudimage-360" data-folder="/themes/main/images/360/bac/"
                                    data-filename="KLG_{index}.png" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                               
                                <div class="car-name">
                                    <h4 class="font-kia-bold mt-lg-4 mt-3 text-center font20">
                                        XÁM
                                    </h4>
                                    <P class="desc font-kia-light">
                                        Steel Grey
                                    </P>
                                </div>
                            </div>



                            {{-- Gray 1 --}}
                            <div id="tabcar05" class="container tab-pane item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/bac2/"
                                    data-filename="SWP_{index}.png" data-amount="30" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                                <div class="car-name">
                                    <h4 class="font-kia-bold mt-lg-4 mt-3 text-center font20">
                                        BẠC
                                    </h4>
                                    <P class="desc font-kia-light">
                                        Sleek Sliver
                                    </P>
                                </div>
                            </div>

                            {{-- đỏ  --}}
                            <div id="tabcar01b" class="container tab-pane item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/do/"
                                data-filename="M4B_{index}.png" data-amount="31" data-spin-reverse="true"></div>
                            <div class="ring360">
                                <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                            </div>
                            <div class="car-name">
                                <h4 class="font-kia-bold mt-lg-4 mt-3 text-center font20">
                                    ĐỎ
                                </h4>
                                <P class="desc font-kia-light">
                                    Runway Red
                                </P>
                            </div>
                            </div>
                           
                        </div>
                        <ul class="nav nav-tabs tab-color-car" role="tablist">
                            {{-- Blue 1 --}}
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabcar06"  data-name="White Premium">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue_1.webp') }}" alt="K3">
                                </a>
                               
                            </li>
                           {{-- White --}}
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar01">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/white.webp') }}" alt="K3">
                                </a>
                            </li>
                            {{-- Black --}}
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar02">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/black.jpg') }}" alt="K3">
                                </a>
                            </li>
                            {{-- Blue --}}
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar03">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue_2.jpg') }}" alt="K3">
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar03">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue2.png') }}" alt="K3">
                                </a>
                            </li> --}}
                            {{-- Gray --}}
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar04">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray.jpg') }}" alt="K3">
                                </a>
                            </li>
                             {{-- Gray 1 --}}
                             <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar05">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray_1.webp') }}" alt="K3">
                                </a>
                            </li>
                            {{-- RED --}}
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar01b">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/red2.jpg') }}" alt="K3">
                                </a>
                            </li>
                           
                        </ul>
                    </div>

                    <div class="desc-car">
                        <div class="desc-car-item">
                            <p class="top font50 font-kia-bold">126 hp</p>
                            <p class="bottom font15 font-kia-re">6,300 rpm</p>
                        </div>
                        <div class="desc-car-item">
                            <p class="top font50 font-kia-bold">155 Nm</p>
                            <p class="bottom font15 font-kia-re">4,850 rpm</p>
                        </div>


                        {{-- tạm ẩn  --}}
                        {{-- <div class="desc-car-item">
                            <p class="top font40 font-kia-bold">6.9 L</p>
                            <p class="bottom font15 font-kia-re">100 km <br>(hỗn hợp)</p>
                            <p class="bottom font15 font-kia-re">(Áp dụng cho <br>phiên bản premium)</p>
                        </div> --}}
                    </div>
                </div>
            </div>

            {{-- Hình luxury  --}}
            <div id="section3c" class="tab-pane fade">
                <div class="content-tab-wrap">
                    <div class="slider-car">
                        {{-- hình xe chính  --}}
                        <div class="tab-content tabcontent2" >
                             {{-- Blue 01 --}}
                             <div id="tabcar03b" class="container tab-pane tab-pane2 item-car-color active"><br>
                                {{-- <div class="cloudimage-360" data-folder="/themes/main/images/360/blue_1/"
                                    data-filename="M4B_{index}.webp" data-amount="36" data-spin-reverse="true"></div> --}}
                                    <img src="{{ Theme::asset()->url('images/section3/2xe.png') }}" alt="360" class="img-car">
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div>
                            {{-- White --}}
                            <div id="tabcar01b" class="container tab-pane tab-pane2 item-car-color "><br>
                                {{-- <div class="cloudimage-360" data-folder="/themes/main/images/360/"
                                    data-filename="SWP_{index}.webp" data-amount="36" data-spin-reverse="true"></div> --}}

                                    <img src="{{ Theme::asset()->url('images/section3/3xe.png') }}" alt="360" class="img-car">
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div>
                            {{-- Black --}}
                            <div id="tabcar02b" class="container tab-pane tab-pane2 item-car-color"><br>
                                {{-- <div class="cloudimage-360" data-folder="/themes/main/images/360/black/"
                                    data-filename="ABP_{index}.webp" data-amount="36" data-spin-reverse="true"></div> --}}
                                    <img src="{{ Theme::asset()->url('images/section3/1xe.png') }}" alt="360" class="img-car">
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div>
                           
                            {{-- Gray --}}
                            {{-- <div id="tabcar04b" class="container tab-pane tab-pane2 item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/gray/"
                                    data-filename="ABT_{index}.webp" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div> --}}
                            {{-- Gray 1 --}}
                            {{-- <div id="tabcar05b" class="container tab-pane tab-pane2 item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/gray_1/"
                                    data-filename="KLG_{index}.webp" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div> --}}
                            {{-- Blue --}}
                            {{-- <div id="tabcar03b" class="container tab-pane tab-pane2 item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/blue/"
                                    data-filename="B4U_{index}.webp" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div> --}}
                        </div>
                        <ul class="nav nav-tabs tab-color-car" role="tablist">
                            {{-- Blue --}}
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabcar03b">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue_1.webp') }}" alt="K3">
                                </a>
                            </li>
                           {{-- White --}}
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar01b">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/red.jpg') }}" alt="K3">
                                </a>
                            </li>
                            {{-- Black --}}
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar02b">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/white.webp') }}" alt="K3">
                                </a>
                            </li>
                            
                            {{-- Gray --}}
                            {{-- <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar04b">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray.jpg') }}" alt="K3">
                                </a>
                            </li> --}}
                             {{-- Gray 1 --}}
                             {{-- <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar05b">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray_1.webp') }}" alt="K3">
                                </a>
                            </li> --}}
                            {{-- Blue 1 --}}
                            {{-- <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar06b">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue_1.webp') }}" alt="K3">
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="desc-car">
                        <div class="desc-car-item">
                            <p class="top font40 font-kia-bold">126 hp</p>
                            <p class="bottom font20 font-kia-re">6,300 rpm</p>
                        </div>
                        <div class="desc-car-item">
                            <p class="top font40 font-kia-bold">155 Nm</p>
                            <p class="bottom font20 font-kia-re">4,850 rpm</p>
                        </div>
                        <div class="desc-car-item">
                            <p class="top font40 font-kia-bold">6.9 L</p>
                            <p class="bottom font20 font-kia-re">100 km <br>(hỗn hợp )(*)</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Hình Mt  --}}
            <div id="section3d" class="tab-pane fade">
                <div class="content-tab-wrap">
                    <div class="slider-car">
                        {{-- hình xe chính  --}}
                        <div class="tab-content tabcontent2" >
                            {{-- Blue 01 --}}
                            <div id="tabcar03c" class="container tab-pane tab-pane2 item-car-color active"><br>
                                {{-- <div class="cloudimage-360" data-folder="/themes/main/images/360/blue_1/"
                                    data-filename="M4B_{index}.webp" data-amount="36" data-spin-reverse="true"></div> --}}
                                    <img src="{{ Theme::asset()->url('images/section3/2xe.png') }}" alt="360" class="img-car">
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div>
                            {{-- White --}}
                            <div id="tabcar01c" class="container tab-pane tab-pane2 item-car-color"><br>
                                {{-- <div class="cloudimage-360" data-folder="/themes/main/images/360/"
                                    data-filename="SWP_{index}.webp" data-amount="36" data-spin-reverse="true"></div> --}}

                                    <img src="{{ Theme::asset()->url('images/section3/3xe.png') }}" alt="360" class="img-car">
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div>
                            {{-- Black --}}
                            <div id="tabcar02c" class="container tab-pane tab-pane2 item-car-color"><br>
                                {{-- <div class="cloudimage-360" data-folder="/themes/main/images/360/black/"
                                    data-filename="ABP_{index}.webp" data-amount="36" data-spin-reverse="true"></div> --}}
                                    <img src="{{ Theme::asset()->url('images/section3/1xe.png') }}" alt="360" class="img-car">
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div>
                            
                            {{-- Gray --}}
                            {{-- <div id="tabcar04b" class="container tab-pane tab-pane2 item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/gray/"
                                    data-filename="ABT_{index}.webp" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div> --}}
                            {{-- Gray 1 --}}
                            {{-- <div id="tabcar05b" class="container tab-pane tab-pane2 item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/gray_1/"
                                    data-filename="KLG_{index}.webp" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div> --}}
                            {{-- Blue --}}
                            {{-- <div id="tabcar03b" class="container tab-pane tab-pane2 item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/blue/"
                                    data-filename="B4U_{index}.webp" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div> --}}
                        </div>
                        <ul class="nav nav-tabs tab-color-car" role="tablist">
                             {{-- Blue --}}
                             <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabcar03c">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue_1.webp') }}" alt="K3">
                                </a>
                            </li>
                           {{-- White --}}
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabcar01c">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/red.jpg') }}" alt="K3">
                                </a>
                            </li>
                            {{-- Black --}}
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar02c">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/white.webp') }}" alt="K3">
                                </a>
                            </li>
                           
                            {{-- Gray --}}
                            {{-- <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar04b">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray.jpg') }}" alt="K3">
                                </a>
                            </li> --}}
                             {{-- Gray 1 --}}
                             {{-- <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar05b">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray_1.webp') }}" alt="K3">
                                </a>
                            </li> --}}
                            {{-- Blue 1 --}}
                            {{-- <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar06b">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue_1.webp') }}" alt="K3">
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="desc-car">
                        <div class="desc-car-item">
                            <p class="top font40 font-kia-bold">126 hp</p>
                            <p class="bottom font20 font-kia-re">6,300 rpm</p>
                        </div>
                        <div class="desc-car-item">
                            <p class="top font40 font-kia-bold">155 Nm</p>
                            <p class="bottom font20 font-kia-re">4,850 rpm</p>
                        </div>
                        <div class="desc-car-item">
                            <p class="top font40 font-kia-bold">6.9 L</p>
                            <p class="bottom font20 font-kia-re none-pc">100 km <br>(hỗn hợp )(*)</p>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    

<!--
    <div class="container-remake section3-wrap">

        @if (has_field($page, 'car_tab_s3'))
        <ul class="list-tab-section3 nav nav-tabs" role="tablist">
            <div class="border-dotter"
                style="background-image: url('{{ Theme::asset()->url('images/section3/borderdt.png') }}')">

            </div>
            <div class="border-dotter-mb"
                style="background-image: url('{{ Theme::asset()->url('images/section3/borderdt.png') }}')">
            </div>

            @foreach (get_field($page, 'car_tab_s3') as $key => $item)
            <li class="nav-item" data-aos="fade-right" data-aos-offset="300" data-aos-duration="700"
                data-aos-easing="ease-in-sine">
                <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab" href="#tab{{ $key }}">
                    <div class="item-tab-wrap">
                        <div class="left">
                            <img src="{{ Theme::asset()->url('images/section3/icontab1.png') }}" alt="" class="icontab">
                            <img src="{{ Theme::asset()->url('images/section3/icontab2.png') }}" alt=""
                                class="icontab-active">
                        </div>
                        <div class="right">
                            <p class="top font20 font-buenos-re">KIA Cerato</p>
                            @if (has_sub_field($item, 'car_name_tab_menu'))
                            <p class="bottom font25 font-buenos-bold">{{ get_sub_field($item , 'car_name_tab_menu') }}
                            </p>
                            @endif
                        </div>
                    </div>
                </a>
            </li>

            @endforeach

        </ul>
        @endif
        @if (has_field($page, 'car_tab_s3'))
        <div class="content-tab-section3 tab-content">
            @foreach (get_field($page, 'car_tab_s3') as $key => $item)

            <div id="tab{{ $key }}" class="tab-pane {{ $loop->first ? 'active' : '' }}">
                {{-- tab content seclect car --}}

                @if (has_sub_field($item, 'color_of_car'))
                <div class="content-tab-wrap">
                    <div class="slider-car">
                        {{-- hình xe chính  --}}
                        <div class="tab-content" data-aos="fade-down" data-aos-easing="ease-out-cubic"
                            data-aos-duration="1000">
                            {{-- White --}}
                            <div id="tabcar01" class="container tab-pane item-car-color active"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/"
                                    data-filename="SWP_{index}.webp" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div>
                            {{-- Black --}}
                            <div id="tabcar02" class="container tab-pane item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/black/"
                                    data-filename="ABP_{index}.webp" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div>
                            {{-- Blue 01 --}}
                            <div id="tabcar03" class="container tab-pane item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/blue_1/"
                                    data-filename="M4B_{index}.webp" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div>
                            {{-- Gray --}}
                            <div id="tabcar04" class="container tab-pane item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/gray/"
                                    data-filename="ABT_{index}.webp" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div>
                            {{-- Gray 1 --}}
                            <div id="tabcar05" class="container tab-pane item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/gray_1/"
                                    data-filename="KLG_{index}.webp" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div>
                            {{-- Blue --}}
                            <div id="tabcar06" class="container tab-pane item-car-color"><br>
                                <div class="cloudimage-360" data-folder="/themes/main/images/360/blue/"
                                    data-filename="B4U_{index}.webp" data-amount="36" data-spin-reverse="true"></div>
                                <div class="ring360">
                                    <img src="{{ Theme::asset()->url('images/section3/360.png') }}" alt="360">
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs tab-color-car" role="tablist">
                           {{-- White --}}
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabcar01">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/white.webp') }}" alt="K3">
                                </a>
                            </li>
                            {{-- Black --}}
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar02">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/black.jpg') }}" alt="K3">
                                </a>
                            </li>
                            {{-- Blue --}}
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar03">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue.webp') }}" alt="K3">
                                </a>
                            </li>
                            {{-- Gray --}}
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar04">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray.jpg') }}" alt="K3">
                                </a>
                            </li>
                             {{-- Gray 1 --}}
                             <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar05">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/gray_1.webp') }}" alt="K3">
                                </a>
                            </li>
                            {{-- Blue 1 --}}
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabcar06">
                                    <img src="{{ Theme::asset()->url('images/360_color_thumb/blue_1.webp') }}" alt="K3">
                                </a>
                            </li>
                        </ul>
                    </div>

                    @if(has_sub_field($item, 'chi_so_of_xe'))
                    <div class="desc-car">
                        @foreach (get_sub_field($item, 'chi_so_of_xe') as $chiso)
                        <div class="desc-car-item">
                            @if(has_sub_field($chiso, 'chi_so_tren'))
                            <p class="top font40 font-buenos-bold">{!! get_sub_field($chiso, 'chi_so_tren') !!}</p>
                            @endif
                            @if(has_sub_field($chiso, 'chi_so_duoi'))
                            <p class="bottom font20 font-buenos-re">{!! get_sub_field($chiso, 'chi_so_duoi') !!}</p>
                            @endif
                        </div>
                        @endforeach

                    </div>
                    @endif
                </div>
                @endif
            </div>
            @endforeach
        </div>
        @endif
    </div>
-->

<div class="mobie-showw">
    <p class="font-kia-light tt-text-mobie">
        *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với thực tế
    </p>
</div>
</div>