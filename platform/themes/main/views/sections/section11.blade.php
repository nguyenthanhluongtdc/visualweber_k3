<div class="section section11 fp-auto-height-responsive fp-section fp-completely" data-anchor="chon-xe-online">
    <div class="section11-bg">
    </div>
    <div class="section11-wrap container-remake" data-aos="fade-left" data-aos-offset="300" data-aos-duration="500" data-aos-easing="ease-in-sine">
        <h3 class="font60 font-kia-bold" >ĐẶT XE TRỰC TUYẾN</h3>
        <div class="start">
            <a href="https://kiamotorsvietnam.com.vn/du-toan-chi-phi/chon-xe-va-phien-ban?car_model=25&color_id=14" target="_blank">
                <div class="img"><img src="{{ Theme::asset()->url('images/section11/s11icon.png') }}"></div>
                <p class="font20 font-kia-re">Bắt đầu ngay</p>
            </a>
        </div>

        @if (has_field($page, 'hinh_chon_xe_truc_tuyen'))
        <div class="car-s11" >
            <img src="{{ RvMedia::getImageUrl(get_field($page, 'hinh_chon_xe_truc_tuyen')) }}"
            alt="K3">
        </div>
        @endif
        <div class="action-s11">
            <div class="action-item" >
                <a href="{{ RvMedia::getImageUrl(get_field($page, 'hinh_anh_section_2')) }}" data-fancybox="images" data-caption="NEW CERATO K3">
                    <img src="{{ Theme::asset()->url('images/section11/s11icon1.png') }}">
                    <p class="font20 font-kia-re">Hình ảnh</p>
                </a>
                @foreach (get_field($page, 'slider_section_7') as $item)
                    <a  href="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_item_slider')) }}" data-fancybox="images" data-caption="NEW CERATO K3"></a>
                @endforeach
                @foreach (get_field($page, 'list_section8') as $key => $item)
                <a  href="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_van_hanh')) }}" data-fancybox="images" data-caption="NEW CERATO K3"></a>
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
            <div class="action-item" >
                <a href="{{ Theme::asset()->url('images/section11/s11icon4.png') }}" data-fancybox="qrcode" data-caption="NEW CERATO K3">
                    <img src="{{ Theme::asset()->url('images/section11/s11icon4.png') }}">
                    <p class="font20 font-kia-re">QR code</p>
                </a>
            </div>
        </div>
    </div>
</div>