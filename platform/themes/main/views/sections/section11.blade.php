<div class="section section11 fp-auto-height-responsive fp-section fp-completely" data-anchor="bo-suu-tap"
    >
    <div class="section11-wrap">
        <p class="tt-test font-kia-light">
            *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với thực tế
        </p>
        <h3 class="font60 font-kia-bold">Thư viện ảnh</h3>
        <div class="section11-carousel section11-carou owl-carousel s11-pc">
            @foreach (get_field($page, 'slider_section_7') as $item)
                <div class="item-slider">
    
                    @if (has_sub_field($item, 'hinh_item_slider'))
                        <a href="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_item_slider')) }}" data-fancybox="thuvien" data-caption="THE NEW K3">
                            <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_item_slider')) }}" alt="K3">
                        </a>
                    @endif
                </div>
            @endforeach
            @foreach (get_field($page, 'list_section8') as $key => $item)
            <div class="item-slider">
    
                @if (has_sub_field($item, 'hinh_van_hanh'))
                    <a href="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_van_hanh')) }}" data-fancybox="thuvien" data-caption="THE NEW K3">
                        <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_van_hanh')) }}" alt="K3">
                    </a>
                @endif
            </div>
            @endforeach
        </div>
        <div class="section11-carousel section11-carou owl-carousel s11-mobie">
            @foreach (get_field($page, 'slider_section_7') as $item)
                <div class="item-slider">
    
                    @if (has_sub_field($item, 'hinh_item_slider'))
                        <a href="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_item_slider')) }}" data-fancybox data-caption="THE NEW K3">
                            <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_item_slider')) }}" alt="K3">
                        </a>
                    @endif
                </div>
            @endforeach
            @foreach (get_field($page, 'list_section8') as $key => $item)
            <div class="item-slider">
    
                @if (has_sub_field($item, 'hinh_van_hanh'))
                    <a href="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_van_hanh')) }}" data-fancybox data-caption="THE NEW K3">
                        <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_van_hanh')) }}" alt="K3">
                    </a>
                @endif
            </div>
            @endforeach
        </div>
    </div>

    <div class="mobie-showw">
        <p class="font-kia-light tt-text-mobie">
            *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với thực tế
        </p>
    </div>
</div>
