<?php

use App\Hotel;


Route::group(['prefix' => '/'], function () {

    Route::get('setlanguage', function(){
        $language = Request::input('lang');
        $backUrl = URL::previous();
        if(str_contains($backUrl,'/setlanguage'))
        {
            return redirect('/')->withCookie('lang',$language);
        }
        else
        {
            return redirect($backUrl)->withCookie('lang',$language);
        }
    });

    Route::get('/', 'HomeController@show');
    Route::get('home', 'HomeController@show');
    Route::get('about','PagesController@about');
    Route::get('about_vip','PagesController@aboutVip');
    Route::get('terms-of-use','PagesController@termsOfUse');

});

Route::group(['prefix' => '/'], function(){
    Route::get('hotels/search', 'HotelController@search');
    Route::resource('hotels', 'HotelController',['only' => ['index','show']]);  
});

Route::group(['prefix' => 'api'], function () {
    Route::resource('hotels', 'Api\HotelController', ['only' => ['index','show']]);
});
