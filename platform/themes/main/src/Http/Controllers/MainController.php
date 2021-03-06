<?php

namespace Theme\Main\Http\Controllers;

use Theme;
use RvMedia;
use Response;
use SeoHelper;
use BaseHelper;
use SlugHelper;
use SiteMapManager;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Platform\Page\Models\Page;
use Illuminate\Routing\Controller;
use Platform\Page\Services\PageService;
use Platform\Theme\Events\RenderingSingleEvent;
use Platform\Theme\Events\RenderingSiteMapEvent;
use Platform\Theme\Events\RenderingHomePageEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Theme\Http\Controllers\PublicController;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Platform\ContactBuyCar\Http\Requests\ContactBuyCarRequest;
use Platform\ContactBuyCar\Repositories\Interfaces\ContactBuyCarInterface;
use Platform\Contact\Events\SentContactEvent;
use EmailHandler;
use Analytics;
use Platform\Analytics\Exceptions\InvalidConfiguration;
use Platform\Analytics\Period;

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

        Theme::breadcrumb()->add(__('Trang ch???'), route('public.index'));

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
        if(!blank($section) && !in_array($section, ['trang-chu', 'su-tro-lai', 'hinh-360', 'video', 'ngoai-that', 'hinh-anh', 'noi-that' , 'van-hanh' , 'an-toan', 'dat-xe-truc-tuyen', 'bo-suu-tap','lien-he'])) {            
            return redirect()->route('public.page');
        }
        $key = null;
        if (empty($key)) {
            return $this->getLdp($section);
        }
        $slug = SlugHelper::getSlug($key, '');

        if (!$slug) {
            abort(404);
        }

        if (defined('PAGE_MODULE_SCREEN_NAME')) {
            if ($slug->reference_type == Page::class && BaseHelper::isHomepage($slug->reference_id)) {
                return redirect()->to(route('public.page'));
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

    public function getLdp($section = null){
       
        if (defined('PAGE_MODULE_SCREEN_NAME')) {
            $homepageId = BaseHelper::getHomepageId();
            if ($homepageId) {
                $slug = SlugHelper::getSlug(null, SlugHelper::getPrefix(Page::class), Page::class, $homepageId);

                if ($slug) {
                    $data = (new PageService)->handleFrontRoutes($slug);
                    $data['data']['section'] = $section;
                    $startDate = \Carbon\Carbon::parse('2005-01-01 00:00:00');
                    $endDate = \Carbon\Carbon::now()->addDays(1)->endOfDay();
                    $period = Period::create($startDate, $endDate);
                    $total = Analytics::performQuery($period,
                'ga:sessions, ga:users, ga:pageviews, ga:percentNewSessions, ga:bounceRate, ga:pageviewsPerVisit, ga:avgSessionDuration, ga:newUsers')->totalsForAllResults;
                    $total['ga:pageviews'] = ($total['ga:pageviews'] ?? 0) + 18278;
                    $data['data']['total_buy_car'] = floor($total['ga:pageviews'] * 0.04 ?? 0);
                    $data['data']['total_access'] = $total['ga:pageviews'] ?? 0;
                    return Theme::scope('page', $data['data'], $data['default_view'])->render();
                }
            }
        }

        SeoHelper::setTitle(theme_option('site_title'));

        Theme::breadcrumb()->add(__('Trang ch???'), route('public.page',$section));

        event(RenderingHomePageEvent::class);
    }
    public function getShowroom(Request $request, BaseHttpResponse $response){
        try {
            $data = get_agencies_by_province_id($request->provinceId);
            $output = "";
            if(!empty($data)){
                foreach($data as $item){
                    $output.='<option value="'.$item->id.'" >'.$item->name.'</option>';
                }
            }
            return response()->json(
                [
                    'showroom' => $output,
                    'type' => 'success',
                ]
            );
        } catch (\Throwable $th) {
            \Log::error('C?? l???i x???y ra khi l???y danh s??ch ?????i l?? theo t???nh th??nh', [$th->getMessage(), $th->getFile(), $th->getLine()]);
            return response()->json(
                [
                    'type' => 'error',
                    'message' => $th->getMessage(),

                ]
            );
        }
    }
    public function getDistrict(Request $request, BaseHttpResponse $response){
        try {
            $data = get_district_by_province_id($request->provinceId);
            $output = '<option selected value="" >Vui l??ng ch???n Qu???n/Huy???n</option>';
            if(!empty($data)){
                foreach($data as $item){
                    $output.='<option value="'.$item->maqh.'" >'.$item->name.'</option>';
                }
            }
            return response()->json(
                [
                    'district' => $output,
                    'type' => 'success',
                ]
            );
        } catch (\Throwable $th) {
            \Log::error('C?? l???i x???y ra khi l???y danh s??ch ?????i l?? theo t???nh th??nh', [$th->getMessage(), $th->getFile(), $th->getLine()]);
            return response()->json(
                [
                    'type' => 'error',
                    'message' => $th->getMessage(),

                ]
            );
        }
    }
    public function getWard(Request $request, BaseHttpResponse $response){
        try {
            $data = get_ward_by_district_id($request->districtId);
            $output = '<option selected value="" >Vui l??ng ch???n Ph?????ng/X??</option>';
            if(!empty($data)){
                foreach($data as $item){
                    $output.='<option value="'.$item->xaid.'" >'.$item->name.'</option>';
                }
            }
            return response()->json(
                [
                    'ward' => $output,
                    'type' => 'success',
                ]
            );
        } catch (\Throwable $th) {
            \Log::error('C?? l???i x???y ra khi l???y danh s??ch ?????i l?? theo t???nh th??nh', [$th->getMessage(), $th->getFile(), $th->getLine()]);
            return response()->json(
                [
                    'type' => 'error',
                    'message' => $th->getMessage(),

                ]
            );
        }
    }
    public function getCarPrice(Request $request){
        try {
            $data = get_registration_fee_by_id($request->cityId);
            
            return response()->json(
                [
                    'phi_truoc_ba' => $data->phi_truoc_ba ?? 0,
                    'phi_dang_ky_bien_so' => $data->phi_dang_ky_bien_so ?? 0,
                    'phi_dang_kiem_xe' => $data->phi_dang_kiem_xe ?? 0,
                    'type' => 'success',
                ]
            );
        } catch (\Throwable $th) {
            \Log::error('C?? l???i x???y ra khi l???y danh s??ch ?????i l?? theo t???nh th??nh', [$th->getMessage(), $th->getFile(), $th->getLine()]);
            return response()->json(
                [
                    'type' => 'error',
                    'message' => $th->getMessage(),

                ]
            );
        }
        
    }
    public function postSendContact(ContactBuyCarRequest $request, BaseHttpResponse $response, ContactBuyCarInterface $contactRepository)
    {        
        try {
            // $city = get_city_by_id($request->city)->name;
            // $showroom = get_showroom_by_id($request->showroom)->name;
            // $district = get_district_by_id($request->district)->name;
            // $ward = get_ward_by_id($request->ward)->name;

            $contact = $contactRepository->getModel();
            $contact = $contact->fill($request->input());
            $data = $contactRepository->createOrUpdate($contact);
            
            EmailHandler::send(view('theme.main::views.mails.contact',['data'=>$data])->render(), 'Re: ' . $contact->subject, $contact->email);
            // event(new SentContactEvent($contact));
            // EmailHandler::setModule(CONTACT_MODULE_SCREEN_NAME)
            //     ->setVariableValues([
            //         'contact_name'    => $contact->name ?? 'N/A',
            //         'contact_subject' => $contact->subject ?? 'N/A',
            //         'contact_email'   => $contact->email ?? 'N/A',
            //         'contact_phone'   => $contact->phone ?? 'N/A',
            //         'contact_city'   => $contact->city ?? 'N/A',
            //         'contact_address' => $contact->address ?? 'N/A',
            //         'contact_content' => $contact->content ?? 'N/A',
            //         'contact_showroom' => $contact->showroom ?? 'N/A',
            //         'contact_district' => $contact->district ?? 'N/A',
            //         'contact_ward' => $contact->ward ?? 'N/A',
            //     ])
            //     ->sendUsingTemplate('notice');
                return redirect()->back()->with([
                    'type' => 'success',
                    'message' => __('Send message successfully!')
                ]);
            
            return $response->setMessage(__('Send message successfully!'));
        } catch (Exception $exception) {
            info($exception->getMessage());
            return $response
                ->setError()
                ->setMessage(__('Can\'t send message on this time, please try again later!'));
        }
    }
}
