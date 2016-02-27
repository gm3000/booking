<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function showList(){

        $lang = \App::getLocale();
        $cities = \App\City::select(
            'name_'.$lang.' as name',
            'desc_'.$lang.' as desc',
            'list_thumbnail'
        )
            ->orderBy('heat', 'desc')
            ->get()
            ->all();

        return view('city.index', compact('cities'));
    }

    public function showDetail($id){

        $lang = \App::getLocale();

        $city = \App\City::findOrNew($id,[
            'name_'.$lang.' as name',
            'desc_'.$lang.' as desc',
            'body_'.$lang.' as body',
            'package_'.$lang.' as package',
            'slider_caption_'.$lang.' as caption',
            'slider'
            ])
            ->toArray();

        //substract sliders and captions
        $city['slider_list'] = explode(';', $city['slider']);
        $city['caption_list'] = explode(';', $city['slider_caption']);

        //dd($city);
        return view('city.detail', compact('store'));

    }
}
