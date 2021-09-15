{{-- <div class="section section6 fp-auto-height-responsive fp-section fp-completely" data-anchor="hinh-anh" style="background-image: url('{{ Theme::asset()->url('images/section5/section6.jpg') }}')">
    <img src="{{ Theme::asset()->url('images/section5/section6.jpg') }}" class="img-mobie">
</div> --}}
@if (has_field($page, 'hinh_background_s6'))

<div class="section section6 fp-auto-height-responsive fp-section fp-completely" data-anchor="hinh-anh" style="background-image: url('{{  RvMedia::getImageUrl(get_field($page, 'hinh_background_s6')) }}')">
    {{-- <img src="{{  RvMedia::getImageUrl(get_field($page, 'hinh_background_s6')) }}"> --}}
    <img src="{{  RvMedia::getImageUrl(get_field($page, 'hinh_background_s6')) }}" class="img-mobie">
</div>
@endif