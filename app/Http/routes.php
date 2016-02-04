<?php

use App\Hotel;



Route::group(['prefix' => '/'], function () {

    Route::get('/setlanguage', function(){
        $language = Request::input('lang');
        session(['lang'=>$language]);
        $backUrl = URL::previous();
        if(str_contains($backUrl,'/setlanguage'))
        {
            return redirect('/');
        }
        else
        {
            return redirect($backUrl);
        }
    });

    Route::get('/', 'HomeController@show');
    Route::get('home', 'HomeController@show');

    Route::resource('hotels', 'HotelController');

});


Route::group(['prefix' => 'api'], function () {
    Route::resource('hotels', 'Api\HotelController', ['only' => ['index','show']]);
});


