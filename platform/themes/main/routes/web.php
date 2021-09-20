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
        Route::group(['prefix' => 'ajax'], function () {
            Route::get('showroom', 'MainController@getShowroom')->name('public.ajax.showroom');
            Route::get('xaphuong', 'MainController@getWard')->name('public.ajax.xaphuong');
            Route::get('quanhuyen', 'MainController@getDistrict')->name('public.ajax.quanhuyen');
            Route::get('carprice', 'MainController@getCarPrice')->name('public.ajax.carprice');
            
        });
        Route::post('contact-buy-cars/send', [
            'as'   => 'public.send.contact-buy-cars',
            'uses' => 'MainController@postSendContact',
        ]);
        Route::get('/ldp/{section?}', [
            'as' => 'index',
            'uses' => 'MainController@getSection'
        ]);

    });
});

