{{-- <div class="section section4 fp-auto-height-responsive fp-section fp-completely" data-anchor="video">
    <div class="video videopc" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
        <a data-fancybox href="https://youtu.be/jpUtyTXFQ94">
        <img src="{{ Theme::asset()->url('images/section4.jpg') }}">
        </a>
    </div>
    <div class="videomobie">
        <a data-fancybox href="https://youtu.be/jpUtyTXFQ94">
        <img src="{{ Theme::asset()->url('images/vdmobile.jpg') }}">
        </a>
    </div>
</div> --}}

<div class="section section4 fp-auto-height-responsive fp-section fp-completely" data-anchor="video">
    @if (has_field($page, 'img_video_pc'))

    <div class="video videopc" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
        <a data-fancybox href="{{ Theme::asset()->url('images/k3video.mp4') }}" class="showvideo">
            <img src="{{ Theme::asset()->url('images/bgvideo.jpg') }}" alt="">
        </a>
        <div class="button-video">
           
            <img src="{{ Theme::asset()->url('images/button.png') }}" alt="">
        </div>
    </div>
@endif

@if (has_field($page, 'hinh_video_tren_mobie'))

    <div class="videomobie">
        <a data-fancybox href="{{ Theme::asset()->url('images/k3video.mp4') }}">
            <img src="{{ RvMedia::getImageUrl(get_field($page, 'hinh_video_tren_mobie')) }}"
            alt="K3">
        </a>
    </div>
    @endif


    {{-- <video width="100%" height="100%" controls>
        <source src="{{ Theme::asset()->url('images/k3video.mp4') }}" type="video/mp4">
        <source src="{{ Theme::asset()->url('images/k3video.mp4') }}" type="video/ogg">
      </video> --}}
</div>


