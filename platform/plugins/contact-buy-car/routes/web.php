<?php

Route::group(['namespace' => 'Platform\ContactBuyCar\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'contact-buy-cars', 'as' => 'contact-buy-car.'], function () {
            Route::resource('', 'ContactBuyCarController')->parameters(['' => 'contact-buy-car']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'ContactBuyCarController@deletes',
                'permission' => 'contact-buy-car.destroy',
            ]);
        });
    });

    // Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
    //     Route::post('contact-buy-cars/send', [
    //         'as'   => 'public.send.contact-buy-cars',
    //         'uses' => 'PublicController@postSendContact',
    //     ]);
    // });
    
});

// if (defined('THEME_MODULE_SCREEN_NAME')) {
//     Route::group(['namespace' => 'Platform\Contact\Http\Controllers', 'middleware' => ['web', 'core']], function () {

//         Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
        
//             Route::get('/your-prefix/{slug}', [
//                 'uses' => 'PublicController@getBySlug',
//             ])->name('demo');
        
//         });
        
//     });
// }
