{{-- <div class="section section2  fp-auto-height-responsive fp-section fp-completely" data-anchor="su-tro-lai">
    <div class="container-remake section2-wrap">
        <div class="left">
            <h2 class="font80 font-buenos-bold" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Sự trở lại <br> mạnh mẽ</h2>
            <div class="desc" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-delay="300">
                <p class="font-buenos-light font20">Cerato Mới tiếp tục xây dựng danh tiếng của mình về thiết kế sắc nét, uyển chuyển và hiệu suất thể thao, giới thiệu nhiều cải tiến hơn cho bản lý lịch vốn đã ấn tượng của mình. Cabin cực kỳ hiện đại rộng rãi, 
                    tập trung vào người lái và đắm mình trong thế giới kỹ thuật số với thế hệ thông tin giải trí mới nhất.</p>
                <p class="font-buenos-light font20">Có sẵn trong hai kiểu dáng cơ thể riêng biệt - một chiếc hatchback thể thao và một chiếc sedan kiểu dáng đẹp - Cerato mới là mẫu xe đầu tiên ở Úc có logo mới của chúng tôi. Đó là dấu hiệu của những điều tuyệt vời sắp đến.</p>
            </div>
        </div>
        <div class="right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
            <img src="{{ Theme::asset()->url('images/section2/section2.jpg') }}" alt="">
        </div>
    </div>
</div> --}}


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
        </div>
        @endif
    </div>
    <div class="mobie-showw">
        <p class="font-kia-light tt-text-mobie">
            *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với thực tế
        </p>
    </div>
</div>