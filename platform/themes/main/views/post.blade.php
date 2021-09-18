@php Theme::set('section-name', $post->name) @endphp

<article class="post post--single">
    <header class="post__header">
        <h3 class="post__title">{{ $post->name }}</h3>
        <div class="post__meta">
            @if (!$post->categories->isEmpty())
                <span class="post-category"><i class="ion-cube"></i>
                    <a href="{{ $post->categories->first()->url }}">{{ $post->categories->first()->name }}</a>
                </span>
            @endif
            <span class="post__created-at"><i class="ion-clock"></i>{{ $post->created_at->translatedFormat('M d, Y') }}</span>
            @if ($post->author->username)
                <span class="post__author"><i class="ion-android-person"></i><span>{{ $post->author->name }}</span></span>
            @endif

            @if (!$post->tags->isEmpty())
                <span class="post__tags"><i class="ion-pricetags"></i>
                    @foreach ($post->tags as $tag)
                        <a href="{{ $tag->url }}">{{ $tag->name }}</a>
                    @endforeach
                </span>
            @endif
        </div>
    </header>
    <div class="post__content">
        @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($post)))
            {!! render_object_gallery($galleries, ($post->first_category ? $post->first_category->name : __('Uncategorized'))) !!}
        @endif
        {!! clean($post->content) !!}
        <div class="fb-like" data-href="{{ Request::url() }}" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
    </div>
    @php $relatedPosts = get_related_posts($post->id, 2); @endphp

    @if ($relatedPosts->count())
        <footer class="post__footer">
            <div class="row">
                @foreach ($relatedPosts as $relatedItem)
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="post__relate-group @if ($loop->last) post__relate-group--right @endif">
                            <h4 class="relate__title">@if ($loop->first) {{ __('Previous Post') }} @else {{ __('Next Post') }} @endif</h4>
                            <article class="post post--related">
                                <div class="post__thumbnail"><a href="{{ $relatedItem->url }}" class="post__overlay"></a>
                                    <img src="{{ RvMedia::getImageUrl($relatedItem->image, 'thumb', false, RvMedia::getDefaultImage()) }}" alt="{{ $relatedItem->name }}">
                                </div>
                                <header class="post__header">
                                    <p><a href="{{ $relatedItem->url }}" class="post__title"> {{ $relatedItem->name }}</a></p>
                                    <div class="post__meta"><span class="post__created-at">{{ $post->created_at->translatedFormat('M d, Y') }}</span></div>
                                </header>
                            </article>
                        </div>
                    </div>
                @endforeach
            </div>
        </footer>
    @endif
    <br>
    {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, theme_option('facebook_comment_enabled_in_post', 'yes') == 'yes' ? Theme::partial('comments') : null) !!}
</article>


<header class="header-pc">
    <div class="container-remake header-pc-wrap">
        <div class="header-logo">
           <a href="https://kiamotorsvietnam.com.vn/" target="_blank">
            <img src="{{ Theme::asset()->url('images/logo.png') }}" alt="KIA NEW CERATO K3">
            </a>
        </div>
        <ul class="list-menu font-kia-bold font20" id="menu">
           
            <li class="menu_item" data-menuanchor="ngoai-that">
                <a href="{{ route('public.index') }}#ngoai-that" class="menu_link">
                    <div class="img">
                        <img src="{{ Theme::asset()->url('images/section1/icontop1.png') }}" alt=""  class="menu1">
                    </div>
                    <p>Nhận diện mới</p>
                </a>
            </li>
            <li class="menu_item" data-menuanchor="noi-that">
                <a href="{{ route('public.index') }}#noi-that" class="menu_link">
                    <div class="img">
                        <img src="{{ Theme::asset()->url('images/section1/icontop2.png') }}" alt=""  class="menu2">
                    </div>
                    <p>Kết nối công nghệ</p>
                </a>
            </li>
            <li class="menu_item" data-menuanchor="van-hanh">
                <a href="{{ route('public.index') }}#van-hanh" class="menu_link">
                    <div class="img">
                        <img src="{{ Theme::asset()->url('images/section1/icontop3.png') }}" alt="" class="menu3">
                    </div>
                    <p>Chế độ lái thông minh</p>
                </a>
            </li>
            <li class="menu_item" data-menuanchor="an-toan">
                <a href="{{ route('public.index') }}#an-toan" class="menu_link">
                    <div class="img">
                        <img src="{{ Theme::asset()->url('images/section1/icontop4.png') }}" alt=""  class="menu4">
                    </div>
                    <p>An toàn tối ưu</p>
                </a>
            </li>
            <li class="chose-car" data-menuanchor="dat-xe-truc-tuyen">
                <a href="{{ route('public.index') }}#dat-xe-truc-tuyen">
                    ĐẶT XE TRỰC TUYẾN
                </a>
            </li>

        </ul>


    </div>

</header>

{{-- <header class="header-mobie">
    <div class="container-remake header-mobie-wrap">
        <div class="left open-menu">
            <i class="fas fa-bars"></i>
        </div>
        <div class="content-show">
            <div class="close-menu">
                <i class="fas fa-times"></i>
            </div>
            <ul class="list-menu font-kia-bold font20" id="menu">
                <li class="menu_item close-menu2" data-menuanchor="trang-chu">
                    <a href="{{ route('public.index') }}#trang-chu" class="menu_link">
                        Trang chủ
                    </a>
                </li>
                <li class="menu_item close-menu2" data-menuanchor="ngoai-that">
                    <a href="{{ route('public.index') }}#ngoai-that" class="menu_link">
                        Ngoại thất
                    </a>
                </li>
                <li class="menu_item close-menu2" data-menuanchor="noi-that">
                    <a href="{{ route('public.index') }}#noi-that" class="menu_link">
                        Nội thất
                    </a>
                </li>
                <li class="menu_item close-menu2" data-menuanchor="van-hanh">
                    <a href="{{ route('public.index') }}#van-hanh" class="menu_link">
                        Vận hành
                    </a>
                </li>
                <li class="menu_item close-menu2" data-menuanchor="an-toan">
                    <a href="{{ route('public.index') }}#an-toan" class="menu_link">
                        An toàn
                    </a>
                </li>
                <li class="chose-car close-menu2" data-menuanchor="dat-xe-truc-tuyen">
                    <a href="{{ route('public.index') }}#dat-xe-truc-tuyen">
                        ĐẶT XE TRỰC TUYẾN
                    </a>
                </li>

            </ul>
        </div>
        <div class="header-logo">
            <img src="{{ Theme::asset()->url('images/logo.png') }}" alt="KIA NEW CERATO K3">
        </div>
        <div class="right">
            <i class="fas fa-search"></i>
        </div>
    </div>
</header>
<div class="fixed-button" data-aos="fade-left" data-aos-offset="300" data-aos-duration="700"
    data-aos-easing="ease-in-sine">

    <div class="item-bt">
        <a class="" href="{{ Theme::asset()->url('/brochures/E-BROCHURE-K3.jpg') }}" download" target="_blank">
            <div class="wrap-button">
                <p class="font-kia-bold show-p">E-brochure</p>
                <div class="img-bt">
                    <img src="{{ Theme::asset()->url('images/brochure.png') }}" alt="KIA">
                </div>
            </div>
        </a>
    </div>
    <div class="item-bt">
        <a class="" href="https://www.facebook.com/kiamotorsvietnam/" target="_blank">
            <div class="wrap-button">
                <p class="font-buenos-bold show-p">Facebook</p>
                <div class="img-bt">
                    <i class="fab fa-facebook-f"></i>
                </div>
            </div>
        </a>
    </div>
    <div class="item-bt">
        <a class="" href="https://www.youtube.com/user/thacokia/featured" target="_blank">
            <div class="wrap-button">
                <p class="font-kia-bold show-p">Youtube</p>
                <div class="img-bt">
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </a>
    </div>
    <div class="item-bt d-none">
        <a class="" href=" #">
            <div class="wrap-button">
                <p class="font-kia-bold show-p">Messenger</p>
                <div class="img-bt">
                    <i class="fas fa-comment-alt"></i>
                </div>
            </div>
        </a>
    </div>
    <div class="moveTop">
        <a class="" href=" #">
            <div class="wrap-buttonn">
                <p class="font-kia-bold show-p bttun-to-top">Về trang đầu</p>
                <div class="img-bt">
                    <i class="fas fa-arrow-up"></i>
                </div>
               
            </div>
        </a>
    </div>
</div>


<button id="moveDown">
    <span class="arrow">
        <img class="mw-100" src="{{Theme::asset()->url('/images/icon_down.png')}}" alt="">
    </span>
</button>



<div class="camon">
    <div class="popup-content">
        <h2 class="font-sfu-black font30">CẢM ƠN BẠN ĐÃ ĐĂNG KÝ!</h2>
        <div class="close-popup">
            <i class="fas fa-times"></i>
        </div>
    </div>
</div>


<div id="page-wrap"> --}}