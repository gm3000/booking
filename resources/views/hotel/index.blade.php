@extends('layout.slider-page')
@section('title', trans('title.hotel'))
@section('content')
{{-- change hotel sider images --}}
@include('partial.slider',['images'=>['/images/slider/travel1.jpg','/images/slider/travel2.jpg','/images/slider/travel3.jpg']])
<div id="hotel_list" style="padding-top:3em;">
  <div class="ui grid container">
    <div class="ui three column row">
      <div class="ui column">
        <h1 class="ui red header" style="display:inline-block">
          全球星级酒店
        </h1>
      </div>
      <div class="ui right aligned column">
        <div id="city_list" class="ui horizontal list" style="font-weight:bold;">
          @foreach($cities as $city)
            <a class="item" href="#">{{$city->name}}</a>
          @endforeach
        </div>
      </div>
      <div class="ui right aligned column">
        <form id="searchForm" class="" action="/hotels/search" method="get" style="display:inline;">
          <div class="ui icon input" style="width:21em;">
            <input type="text" name="query" value="{{ Request::input('query') }}" placeholder="{{ trans('site.search') }}">
            <i id="search" class="circular search link icon"></i>
            <input type="submit" style="display:none;">
          </div>
        </form>
      </div>
    </div>
    <div class="ui divider" style="margin-top:2em;">
    </div>
    <div class="ui row">
      <div class="ui column">
        <div class="ui divided items">
          @foreach($hotels as $hotel)
          <div class="ui item">
            <div class="ui image" style="width:100px;height:auto;">
              <img src="http://placem.at/things?w=100&h=100&random=1&txt=0" alt="place holder" />
            </div>
            <div class="content">
              <a class="header">{{$hotel->name}}</a>
              <div class="description">
                <p>
                  {{$hotel->desc}}
                </p>
              </div>
            </div>
          </div>
          @endforeach
          <div class="ui divider">
          </div>
          @include('partial.pagination',['items'=>$hotels])
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
  @parent
  <script src="/js/hotel.js"></script>
@endsection
