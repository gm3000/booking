<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShoppingController extends Controller
{
    public function showList(){

        $lang = \App::getLocale();
        $shoppings = \App\Shopping::select('name_'.$lang.' as name', 'desc_'.$lang.' as desc', 'id', 'logo')->get()->all();
        return view('shopping.index', compact('shoppings'));
    }
}
