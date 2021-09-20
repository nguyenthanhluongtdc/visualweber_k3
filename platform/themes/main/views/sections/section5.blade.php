<div class="section section5 fp-auto-height-responsive fp-section fp-completely" data-anchor="ngoai-that">
    <p class="tt-test font-kia-light">
        *Thông tin và hình ảnh chỉ mang tính chất tham khảo và có thể khác so với thực tế
    </p>
    <div class="container-remake section5-wrap h-100">
        {{-- <div class="section5-abso">
            @if (has_field($page, 'img_pri_s5'))
                    <div class="img-pri h-100" data-aos="fade-right">
                        <img src="{{ RvMedia::getImageUrl(get_field($page, 'img_pri_s5')) }}"
                        alt="CERATO - K3">
                    </div>
                    @endif
        </div> --}}
        <div class="section5-top" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
            <p class="font-kia-bold font30">Ngoại thất</p>
            <h3 class="font-kia-bold font60">Thiết kế tinh tế <br> và năng động </h3>
        </div>
        {{-- <div class="section5-abso-mobie">
            @if (has_field($page, 'img_pri_s5'))
                <div class="img-pri h-100" data-aos="fade-right">
                    <img src="{{ RvMedia::getImageUrl(get_field($page, 'img_pri_s5')) }}" alt="CERATO - K3">
                </div>
            @endif
        </div> --}}
        <div class="section5-tab">
            <div class="section5-tab-wrap">
               <div class="left-pri">
                @if (has_field($page, 'img_pri_s5'))
                <div class="img-pri h-100" data-aos="fade-right">
                    <img src="{{ RvMedia::getImageUrl(get_field($page, 'img_pri_s5')) }}" alt="CERATO - K3">
                </div>
            @endif
               </div>
               
                @if (has_field($page, 'tab_section_s5'))
                    <ul class="nav nav-tabs tab-menu-s6" role="tablist">
                        <div class="border-dotter"
                            style="background-image: url('{{ Theme::asset()->url('images/section3/borderdt.png') }}')">

                        </div>
                        <div class="border-dotter-mb"
                            style="background-image: url('{{ Theme::asset()->url('images/section3/borderdt.png') }}')">
                        </div>

                        @foreach (get_field($page, 'tab_section_s5') as $key => $item)
                            <li class="nav-item" data-aos="fade-up" data-aos-easing="ease-out-cubic"
                                data-aos-duration="1000">
                                <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab"
                                    href="#section5{{ $key }}">
                                    <div class="item-tab-wrap">
                                        <div class="left">
                                            <img src="{{ Theme::asset()->url('images/section3/icontab1.png') }}"
                                                alt="" class="icontab">
                                            <img src="{{ Theme::asset()->url('images/section3/icontab2.png') }}"
                                                alt="" class="icontab-active">
                                        </div>
                                        <div class="right">
                                            @if (has_sub_field($item, 'title_tab_s5'))
                                                <p class="top font20 font-kia-re">{!! get_sub_field($item, 'title_tab_s5') !!}</p>
                                            @endif
                                        </div>
                                    </div>

                                </a>
                            </li>

                        @endforeach

                    </ul>
                @endif
            </div>
            <div class="section5-abso">
                @if (has_field($page, 'tab_section_s5'))

                    <div class="tab-content-left h-100">
                        <div class="tab-content content-s5-tab">
                            @foreach (get_field($page, 'tab_section_s5') as $key => $item)
                                <div id="section5{{ $key }}"
                                    class="tab-pane {{ $loop->first ? 'active' : '' }}">
                                    @if (has_sub_field($item, 'content_tab_s5'))
                                    <p class="font-kia-light font20">{!! get_sub_field($item, 'content_tab_s5') !!}</p>
                                @endif

                                    @if (has_sub_field($item, 'hinh_tab_s5'))
                                        <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_tab_s5')) }}"
                                            alt="CERATO - K3">
                                    @endif
                                  
                                </div>
                            @endforeach

                        </div>
                    </div>
                @endif
            </div>
            
        </div>



    </div>
</div>
