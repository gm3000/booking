<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});

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
