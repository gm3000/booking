<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CityController extends Controller
{

    function __construct() {

        $this->lang = $lang = \App::getLocale();
        $this->list_fields = [
            'id',
            'name_'.$lang.' as name',
            'desc_'.$lang.' as desc',
            'slider_caption_'.$lang.' as slider_caption',
            'slider',
            'logo',
            'heat'
        ];
        $this->detail_fields=[
            'id',
            'name_'.$lang.' as name',
            'desc_'.$lang.' as desc',
            'body_'.$lang.' as body',
            'package_'.$lang.' as package',
            'slider_caption_'.$lang.' as slider_caption',
            'slider',
            'logo'
        ];
    }

    public function showList(){

        $cities = \App\City::with('country')->orderBy('heat', 'desc')->paginate(15,$this->list_fields);
        //dd($cities[0]);
        return view('city.index', compact('cities'));
    }

    public function showDetail($id){

        $city = \App\City::findOrNew($id, $this->detail_fields)
            ->toArray();

        //substract sliders and captions
        $city['slider_list'] = explode(';', $city['slider']);
        $city['caption_list'] = explode(';', $city['slider_caption']);

        //dd($city);
        return view('city.detail', compact('store'));

    }

    public function search(Request $request){
        $query = $request->input('query');
        if(empty($query))
        {
            return redirect('/tops');
        }
        $cities = \App\City::orderBy('heat')
            ->where('name_en','like','%'.$query.'%')
            ->orWhere('name_cn','like','%'.$query.'%')
            ->orWhere('desc_en','like','%'.$query.'%')
            ->orWhere('desc_cn','like','%'.$query.'%')
            ->paginate(15,$this->list_fields);

        return view('city.index',compact('cities'));
    }
}
