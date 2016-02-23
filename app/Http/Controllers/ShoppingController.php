<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShoppingController extends Controller
{
    public function showList(){

        $shoppings = \App\Shopping::all();
        return view('shopping.index', compact('shoppings'));
    }
}
