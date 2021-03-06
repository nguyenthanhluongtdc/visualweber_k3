<div class="section section7 fp-auto-height-responsive fp-section fp-completely" data-anchor="noi-that">
    <p class="tt-test  font-kia-light">
        *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với thực tế
    </p>
    <div class="section7-wrap container-remake">
    {{-- <div class="section7-wrap container-remake h-100"> --}}
        <div class="top" data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
            <p class="font-kia-bold font30">Nội thất</p>
            <h3 class="font60 font-kia-bold">Không gian nội thất rộng rãi,<br>mang đậm tính công nghệ</h3>
        </div>
        @if (has_field($page, 'slider_section_7'))
        {{-- Height trừ phần dic top --}}
        <div class="section7-carousel owl-carousel">

            @foreach (get_field($page, 'slider_section_7') as $item)
            <div class="item-slider">

                @if (has_sub_field($item, 'hinh_item_slider'))
                <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_item_slider')) }}"
                                    alt="K3" >
                @endif
                @if (has_sub_field($item, 'co_video'))
                <div class="button-video3">

                  
                   <div class="img">
                    <img src="{{ Theme::asset()->url('images/button.png') }}" alt="">
                   </div>
                  
                </div>
                <a data-fancybox href="{{ Theme::asset()->url('images/k3cop.mp4') }}" class="showcopsss">
                </a>
                @endif
                {{-- <div class="border"></div> --}}
                <div class="content" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                    @if (has_sub_field($item, 'tieu_de_item_slider'))
                    <h5 class="font-kia-bold font30">{!! get_sub_field($item, 'tieu_de_item_slider') !!}</h5>
                    @endif
                    @if (has_sub_field($item, 'noi_dung_item_slider'))
                    <div class="desc font-kia-light font20">
                        @foreach (get_sub_field($item, 'noi_dung_item_slider') as $item2)
                            <p>{!! get_sub_field($item2, 'item_slider_p') !!}</p>
                        @endforeach

                    </div>
                    @endif
                </div>
            </div>
            @endforeach

        </div>
        @endif
    </div>

    <div class="mobie-showw">
        <p class="font-kia-light tt-text-mobie">
            *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với thực tế
        </p>
    </div>
</div>