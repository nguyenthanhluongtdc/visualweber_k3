<?php

// Custom routes
Route::group(['namespace' => 'Theme\Main\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        // Add your custom route here
        // Ex: Route::get('hello', 'RippleController@getHello');

        Route::get('ajax/search', 'MainController@getSearch')->name('public.ajax.search');

    });
});

// Theme::routes();
use Illuminate\Support\Facades\Route;
Route::group(['namespace' => 'Theme\Main\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/', 'MainController@getIndex')->name('public.index');
        Route::get('/ldp', 'MainController@getLdp')->name('public.page');
        Route::get('sitemap.xml', [
            'as'   => 'public.sitemap',
            'uses' => 'MainController@getSiteMap',
        ]);

        // Route::get('{slug?}' . config('core.base.general.public_single_ending_url'), [
        //     'as'   => 'public.single',
        //     'uses' => 'MainController@getView',
        // ]);
        Route::get('/ldp/{section?}', [
            'as' => 'index',
            'uses' => 'MainController@getSection'
        ]);

    });
});

