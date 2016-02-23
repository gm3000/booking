<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VipProgramController extends Controller
{
    public function index()
    {
      $lang = \App::getLocale();
      return view('vipprogram.'.$lang.'.index');
    }
}
