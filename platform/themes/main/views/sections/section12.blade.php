<div class="section p-auto-height-responsive fp-auto-height section12 fp-auto-height-responsive fp-section fp-table fp-completely" data-anchor="lien-he">
    
    <div class="section section-12-top p-auto-height-responsive fp-auto-height fp-auto-height-responsive fp-section fp-table fp-completely" data-anchor="lien-he"
    style="background-image: url('{{Theme::asset()->url('images/bglienhe.jpg') }}')"
    >
        
        <div class="section11-wrap container-remake" data-aos="fade-left" data-aos-offset="300" data-aos-duration="500" data-aos-easing="ease-in-sine">
            {{-- <h3 class="font60 font-kia-bold" >ĐẶT XE TRỰC TUYẾN</h3>
            <div class="start">
                <a href="https://kiamotorsvietnam.com.vn/du-toan-chi-phi/chon-xe-va-phien-ban?car_model=25&color_id=14" target="_blank">
                    <div class="img"><img src="{{ Theme::asset()->url('images/section11/s11icon.png') }}"></div>
                    <p class="font20 font-kia-re">Bắt đầu ngay</p>
                </a>
            </div> --}}

            {{-- @if (has_field($page, 'hinh_chon_xe_truc_tuyen'))
            <div class="car-s11" >
                <img src="{{ RvMedia::getImageUrl(get_field($page, 'hinh_chon_xe_truc_tuyen')) }}"
                alt="K3">
            </div>
            @endif --}}
            <div class="action-s11">
                <div class="action-item" >
                    <a href="{{ RvMedia::getImageUrl(get_field($page, 'hinh_anh_section_2')) }}" data-fancybox="images" data-caption="The New K3">
                        <img src="{{ Theme::asset()->url('images/section11/s11icon1.png') }}">
                        <p class="font20 font-kia-re">Hình ảnh</p>
                    </a>
                    @foreach (get_field($page, 'slider_section_7') as $item)
                        <a  href="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_item_slider')) }}" data-fancybox="images" data-caption="The New K3"></a>
                    @endforeach
                    @foreach (get_field($page, 'list_section8') as $key => $item)
                    <a  href="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_van_hanh')) }}" data-fancybox="images" data-caption="The New K3"></a>
                    @endforeach
                </div>
                <div class="action-item" >
                    <a href="https://kiamotorsvietnam.com.vn/lien-he" target="_blank">
                        <img src="{{ Theme::asset()->url('images/section11/s11icon2.png') }}">
                        <p class="font20 font-kia-re">Liên hệ (Hotline)</p>
                    </a>
                </div>
                <div class="action-item" >
                    <a href="https://kiamotorsvietnam.com.vn/dai-ly" target="_blank">
                        <img src="{{ Theme::asset()->url('images/section11/s11icon3.png') }}">
                        <p class="font20 font-kia-re">Hệ thống Showroom</p>
                    </a>
                </div>
                {{-- <div class="action-item item-icon-tt" >
                    <a href="#">
                        <img src="{{ Theme::asset()->url('images/section11/icon4.png') }}">
                        <p class="font20 font-kia-re br-close">Thông tin <br>chi tiết</p>
                    </a>
                </div> --}}
                
            </div>
        </div>
    </div>
    
    <div class="section12-wrap container-remake">
        <div class="left">

            @if (has_field($page, 'ten_cong_ty'))
            <h3 class="font-kia-re">{{ get_field($page, 'ten_cong_ty') }}</h3>
            @endif
            @if (has_field($page, 'giay_cndkdn'))
            <p class="item-left font-kia-re"><span>GIẤY CNĐKDN: </span><span>{{ get_field($page, 'giay_cndkdn') }}</span></p>
            @endif

            @if (has_field($page, 'co_quan_cap'))
            <p class="item-left font-kia-re"><span>CƠ QUAN CẤP: </span><span>{{ get_field($page, 'co_quan_cap') }}</span></p>
            @endif
            @if (has_field($page, 'dia_chi'))
            <p class="item-left font-kia-re"><span>ĐỊA CHỈ: </span><span>{{ get_field($page, 'dia_chi') }}</span></p>
            @endif
            <img src="{{ Theme::asset()->url('images/bct.png') }}">
            <p class="allright font-buenos-re">
                © 2020 KIA MOTORS VIET NAM. ALL RIGHT RESERVED.
            </p>
        </div>
        <div class="footer-menu">
            <h3 class="font-kia-re">SẢN PHẨM</h3>
            @if (has_field($page, 'san_pham'))
            <ul class="listmenu-ft font-kia-re">
                @foreach (get_field($page, 'san_pham') as $item)
                    <li><a href="{{ get_sub_field($item , 'link_san_pham_ft')}}">{{ get_sub_field($item , 'ten_san_pham_ft')}}</a></li>
                @endforeach
            </ul>
            @endif
        </div>
        <div class="policy">
            <h3 class="font-kia-re">CHÍNH SÁCH</h3>
            @if (has_field($page, 'chinh_sach'))
            <ul class="listpolicy-ft font-kia-re">
                @foreach (get_field($page, 'chinh_sach') as $item)
                <li><a href="{{ get_sub_field($item , 'link_chinh_sach')}}">{{ get_sub_field($item , 'ten_chinh_sach')}}</a></li>
            @endforeach
               
            </ul>
            @endif
        </div>
        <div class="right"  class="font-kia-re">
            <h3 class="font-kia-re">LIÊN HỆ VỚI CHÚNG TÔI</h3>
            @if (has_field($page, 'hotline'))
            <div class="right-item">
                <a href="">
                    <p class="right-item">
                        <span><i class="fas fa-phone"></i></span>
                        <span>HOTLINE: </span>
                        <span>{{ get_field($page, 'hotline') }}</span>
                    </p>
                </a>
            </div>
            @endif
            @if (has_field($page, 'mail_1'))
           <div class="right-item">
            <a href="mailto:{{ get_field($page, 'mail_1') }}">
                <p class="right-item">
                    <span><i class="fa fa-envelope"></i></span>
                    <span>{{ get_field($page, 'mail_1') }}</span>
                </p>
            </a>
           </div>
           @endif

          
            <div class="social">

                @if (has_field($page, 'link_facebook'))
                <div class="item-social">
                    <a href="https://www.facebook.com/kiamotorsvietnam/" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
                @endif
                @if (has_field($page, 'link_youtube'))
                <div class="item-social">
                    <a href="https://www.youtube.com/user/thacokia/featured" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
                @endif
            </div>

            <h3>TẢI ỨNG DỤNG KIA LINK</h3>
            <div class="app-kia">
                <div class="qr-code">
                    <img src="{{ Theme::asset()->url('images/qr.png') }}">

                </div>
                <div class="app-store">

                    @if (has_field($page, 'link_google_play'))
                    <div class="item-app item-app-t">
                        <a href="{{ get_field($page, 'link_google_play') }}" target="_blank">
                            <img src="{{ Theme::asset()->url('images/ggp.png') }}">
                        </a>
                    </div>
                    @endif

                    @if (has_field($page, 'link_app_store'))
                    <div class="item-app">
                        <a href="{{ get_field($page, 'link_app_store') }}" target="_blank">
                            <img src="{{ Theme::asset()->url('images/at.png') }}">
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>