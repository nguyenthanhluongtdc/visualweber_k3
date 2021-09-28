

<div class="section section2  fp-auto-height-responsive fp-section fp-completely" data-anchor="su-tro-lai">
    <p class="tt-test font-kia-light">
        *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với thực tế
    </p>
    <div class="container-remake section2-wrap">
       
        <div class="left">
            <h2 class="font60 font-kia-bold" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Một bước tiến <br> vượt trội</h2>
            
            @if (has_field($page, 'section2_content'))
            
            <div class="desc" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-delay="300">
                @foreach (get_field($page, 'section2_content') as $item)

                <p class="font-kia-light font20">
                    {!! get_sub_field($item, 'content_item_section2') !!}
                </p>
                @endforeach
            </div>
            @endif
        </div>
        @if (has_field($page, 'hinh_anh_section_2'))
        <div class="right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
            <img src="{{ RvMedia::getImageUrl(get_field($page, 'hinh_anh_section_2')) }}"
            alt="K3">
            <div class="mobie-showw mobie-showw2">
                <p class="font-kia-light tt-text-mobie" style="margin-top : 10px">
                    *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với thực tế
                </p>
            </div>  
        </div>
        @endif
    </div>
   
</div>