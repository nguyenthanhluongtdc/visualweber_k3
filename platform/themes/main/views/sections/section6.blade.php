{{-- <div class="section section6 fp-auto-height-responsive fp-section fp-completely" data-anchor="hinh-anh" style="background-image: url('{{ Theme::asset()->url('images/section5/section6.jpg') }}')">
    <img src="{{ Theme::asset()->url('images/section5/section6.jpg') }}" class="img-mobie">
</div> --}}
@if (has_field($page, 'hinh_background_s6'))

<div class="section section6 fp-auto-height-responsive fp-section fp-completely" data-anchor="hinh-anh" style="background-image: url('{{  RvMedia::getImageUrl(get_field($page, 'hinh_background_s6')) }}')">
    <p class="tt-test font-kia-light">
        *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với thực tế
    </p>
   
    {{-- <img src="{{  RvMedia::getImageUrl(get_field($page, 'hinh_background_s6')) }}"> --}}

    {{-- <div class="content">
        <div class="top">
            <img src="{{ Theme::asset()->url('images/logok3so1.png') }}" alt="logo">
        </div>
        <div class="bottom">
            <h3 class="font60 font-kia-light">KẾT NỐI CÔNG NGHỆ THÔNG MINH</h3>
            <div class="link"><a href="#" class="font20 font-kia-light">KHÁM PHÁ NGAY</a></div>
        </div>
    </div> --}}

    <img src="{{  RvMedia::getImageUrl(get_field($page, 'hinh_background_s6'))  }}" class="img-mobie">
</div>
@endif