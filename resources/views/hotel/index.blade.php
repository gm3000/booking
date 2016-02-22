@extends('layout.slider-page')
@section('title', trans('title.hotel'))
@section('content')
{{-- change hotel sider images --}}
@include('partial.slider',['images'=>['/images/slider/travel1.jpg','/images/slider/travel2.jpg','/images/slider/travel3.jpg']])
<div id="hotel_list" style="padding-top:3em;">
  <div class="ui grid container">
    <div class="ui column">
      <h1 class="ui red header" style="display:inline-block">
        全球星级酒店
      </h1>
      <div style="display:inline-block;float:right;" >
        <div id="city_list" class="ui horizontal list">
          <a class="item" href="#">纽约</a>
          <a class="item" href="#">伦敦</a>
          <a class="item" href="#">巴黎</a>
          <a class="item" href="#">东京</a>
          <a class="item" href="#">纽约</a>
          <a class="item" href="#">伦敦</a>
          <a class="item" href="#">巴黎</a>
          <a class="item" href="#">东京</a>
          <a class="item" href="#">东京</a>
          <a class="item" href="#">纽约</a>
          <a class="item" href="#">伦敦</a>
          <a class="item" href="#">巴黎</a>
          <a class="item" href="#">东京</a>
        </div>
        <div class="ui icon input" style="margin-left:3.5em;width:21em;">
          <input type="text" placeholder="搜索...">
          <i class="circular search link icon"></i>
        </div>
      </div>
      <div class="ui divider" style="margin-top:2em;">
      </div>
      <div class="ui divided items">
        @foreach($hotels as $hotel)
        <div class="ui item">
          <div class="ui image" style="width:80px;height:auto;">
            <img src="http://placem.at/things?w=80&h=80&random=1&txt=0" alt="place holder" />
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
@endsection
@section('scripts')
  @parent
  <script src="/js/hotel.js"></script>
@endsection
