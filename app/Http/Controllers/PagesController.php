<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $lang = \App::getLocale();
        return view('pages.'.$lang.'.about');
    }

    public function aboutVip()
    {
        $lang = \App::getLocale();
        return view('pages.'.$lang.'.about_vip');
    }

    public function termsOfUse()
    {
        $lang = \App::getLocale();
        return view('pages.'.$lang.'.terms_of_use');
    }
}
