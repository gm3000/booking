<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\City;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = \App::getLocale();
        $hotels = Hotel::orderBy('name')->paginate(15,['id','name_'.$lang.' as name','desc_'.$lang.' as desc','logo']);
        $cities = $this->city_list();
        return view('hotel.index',compact(['hotels','cities']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Hotel
     * @return \Illuminate\Http\Response
     */
    public function show($hotel)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit($hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
      $query = $request->input('query');
      if(empty($query))
      {
        return redirect('/hotels');
      }
      $lang = \App::getLocale();
      $hotels = Hotel::orderBy('name')->where('name_en','like','%'.$query.'%')
                                      ->orWhere('name_cn','like','%'.$query.'%')
                                      ->orWhere('desc_en','like','%'.$query.'%')
                                      ->orWhere('desc_cn','like','%'.$query.'%')
                                      ->paginate(15,['id','name_'.$lang.' as name','desc_'.$lang.' as desc','logo']);
      $cities = $this->city_list();
      return view('hotel.index',compact(['hotels','cities']));
    }

    protected function city_list(){
      $lang = \App::getLocale();
      $cities = \DB::table('cities')->join('hotels','cities.id','=','hotels.city_id')
                                    ->select('cities.id as id','cities.name_'.$lang.' as name')
                                    ->groupBy('city_id')
                                    ->orderBy(\DB::raw('count(*)'),'desc')
                                    ->take(7)->get();
      return $cities;
    }

    function hotelsByCity($cid)
    {
      $lang = \App::getLocale();
      $hotels = Hotel::orderBy('name')->where('city_id',$cid)->paginate(15,['id','name_'.$lang.' as name','desc_'.$lang.' as desc','logo']);
      $cities = $this->city_list();
      return view('hotel.index',compact(['hotels','cities']));
    }
}
