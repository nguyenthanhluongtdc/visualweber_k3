<?php

namespace Theme\Main\Http\Controllers;

use Platform\Theme\Http\Controllers\PublicController;
use BaseHelper;
use Platform\Page\Models\Page;
use Platform\Page\Services\PageService;
use Platform\Theme\Events\RenderingSingleEvent;
use Platform\Theme\Events\RenderingHomePageEvent;
use Platform\Theme\Events\RenderingSiteMapEvent;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Routing\Controller;
use Illuminate\Support\Arr;
use Response;
use SeoHelper;
use SiteMapManager;
use SlugHelper;
use Theme;
use RvMedia;

class MainController extends PublicController
{
    /**
     * {@inheritDoc}
     */
    public function getIndex()
    {
        SeoHelper::setTitle(theme_option('seo_title', 'KIA NEW CERATO-K3'))
        ->setDescription(theme_option('seo_description', 'KIA NEW CERATO-K3'))
        ->openGraph()
        ->setTitle(@theme_option('seo_title'))
        ->setSiteName(@theme_option('site_title'))
        ->setUrl(route('public.index'))
        ->setImage(RvMedia::getImageUrl(theme_option('seo_og_image'), 'og'))
        ->addProperty('image:width', '1200')
        ->addProperty('image:height', '630');
        if (defined('PAGE_MODULE_SCREEN_NAME')) {
            $homepageId = BaseHelper::getHomepageId();
            if ($homepageId) {
                $slug = SlugHelper::getSlug(null, SlugHelper::getPrefix(Page::class), Page::class, $homepageId);

                if ($slug) {
                    $data = (new PageService)->handleFrontRoutes($slug);

                    return Theme::scope('index', $data['data'], $data['default_view'])->render();
                }
            }
        }

        SeoHelper::setTitle(theme_option('site_title'));

        Theme::breadcrumb()->add(__('Trang chủ'), route('public.index'));

        event(RenderingHomePageEvent::class);
    // return parent::getIndex();
    }

    /**
     * {@inheritDoc}
     */
    // public function getView($key = null)
    // {
    //     return parent::getView($key);
    // }

    public function getView($key = null)
    {
        return parent::getView($key);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteMap()
    {
        return parent::getSiteMap();
    }

    /**
     * Search post
     *
     * @bodyParam q string required The search keyword.
     *
     * @group Blog
     *
     * @param Request $request
     * @param PostInterface $postRepository
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     *
     * @throws FileNotFoundException
     */
    public function getSearch(Request $request, PostInterface $postRepository, BaseHttpResponse $response)
    {
        $query = $request->input('q');

        if (!empty($query)) {
            $posts = $postRepository->getSearch($query);

            $data = [
                'items' => Theme::partial('search', compact('posts')),
                'query' => $query,
                'count' => $posts->count(),
            ];

            if ($data['count'] > 0) {
                return $response->setData(apply_filters(BASE_FILTER_SET_DATA_SEARCH, $data, 10, 1));
            }
        }

        return $response
            ->setError()
            ->setMessage(__('No results found, please try with different keywords.'));
    }
    // public function getSection($section = null)
    // {
    //     if(!blank($section) && !in_array($section, ['trang-chu', 'su-tro-lai', 'hinh-360', 'video', 'ngoai-that', 'hinh-anh', 'noi-that' , 'van-hanh' , 'an-toan', 'san-pham', 'chon-xe-online' , 'footer'])) {
    //         return redirect()->route('public.index');
    //     }
        
    //     return Theme::scope('index', compact(['section']))->render();
    // }

    
    public function getSection($section = null)
    {
        if(!blank($section) && !in_array($section, ['trang-chu', 'su-tro-lai', 'hinh-360', 'video', 'ngoai-that', 'hinh-anh', 'noi-that' , 'van-hanh' , 'an-toan', 'san-pham', 'chon-xe-online' , 'footer'])) {
            return redirect()->route('public.index');
        }
        $key = null;
        if (empty($key)) {
            return $this->getIndex();
        }
        $slug = SlugHelper::getSlug($key, '');

        if (!$slug) {
            abort(404);
        }

        if (defined('PAGE_MODULE_SCREEN_NAME')) {
            if ($slug->reference_type == Page::class && BaseHelper::isHomepage($slug->reference_id)) {
                return redirect()->to('/');
            }
        }

        $result = apply_filters(BASE_FILTER_PUBLIC_SINGLE_DATA, $slug);

        if (isset($result['slug']) && $result['slug'] !== $key) {
            return redirect()->route('public.single', $result['slug']);
        }

        event(new RenderingSingleEvent($slug));
        Theme::layout('default');


        if (!empty($result) && is_array($result)) {
            return Theme::scope(isset(Arr::get($result, 'data.page')->template) ? Arr::get($result, 'data.page')->template : Arr::get($result, 'view', ''), $result['data'], Arr::get('index', compact(['section'])))->render();
        }

        abort(404);
        // return Theme::scope('index', compact(['section']))->render();
    }

    public function getLdp(){
       
        if (defined('PAGE_MODULE_SCREEN_NAME')) {
            $homepageId = BaseHelper::getHomepageId();
            if ($homepageId) {
                $slug = SlugHelper::getSlug(null, SlugHelper::getPrefix(Page::class), Page::class, $homepageId);

                if ($slug) {
                    $data = (new PageService)->handleFrontRoutes($slug);

                    return Theme::scope('page', $data['data'], $data['default_view'])->render();
                }
            }
        }

        SeoHelper::setTitle(theme_option('site_title'));

        Theme::breadcrumb()->add(__('Trang chủ'), route('public.page'));

        event(RenderingHomePageEvent::class);
    }
}
