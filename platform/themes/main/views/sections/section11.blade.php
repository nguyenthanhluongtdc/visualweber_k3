<div class="section section11 fp-auto-height-responsive fp-section fp-completely" data-anchor="chon-xe-online">
    <div class="section11-bg">
    </div>
    <div class="section11-wrap container-remake" data-aos="fade-left" data-aos-offset="300" data-aos-duration="500" data-aos-easing="ease-in-sine">
        <h3 class="font80 font-buenos-bold" >Chọn xe trực tuyến</h3>
        <div class="start" >
            <a href="">
                <div class="img"><img src="{{ Theme::asset()->url('images/section11/s11icon.png') }}"></div>
                <p class="font20 font-buenos-re">Bắt đầu ngay</p>
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
                <a href="">
                    <img src="{{ Theme::asset()->url('images/section11/s11icon1.png') }}">
                    <p class="font20 font-buenos-re">Hình ảnh</p>
                </a>
            </div>
            <div class="action-item" >
                <a href="">
                    <img src="{{ Theme::asset()->url('images/section11/s11icon2.png') }}">
                    <p class="font20 font-buenos-re">Liên hệ (Hotline)</p>
                </a>
            </div>
            <div class="action-item" >
                <a href="">
                    <img src="{{ Theme::asset()->url('images/section11/s11icon3.png') }}">
                    <p class="font20 font-buenos-re">Hệ thống Showroom</p>
                </a>
            </div>
            <div class="action-item" >
                <a href="">
                    <img src="{{ Theme::asset()->url('images/section11/s11icon4.png') }}">
                    <p class="font20 font-buenos-re">QR code</p>
                </a>
            </div>
        </div>
    </div>
</div>