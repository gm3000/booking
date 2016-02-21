@extends('layout.slider-page')
@section('title', trans('title.hotel'))
@section('content')
{{-- change hotel sider images --}}
@include('partial.slider',['images'=>['/images/slider/travel1.jpg','/images/slider/travel2.jpg','/images/slider/travel3.jpg']])
<?php
  $name='name_'.App::getLocale();
  $desc='desc_'.App::getLocale();
?>
<div id="hotel_list" style="padding-top:3em;">
  <div class="ui grid container">
    <div class="ui column">
      <h2 class="ui red header">
        {{trans('menu.hotel')}}
      </h2>
      <div class="ui divider">
      </div>
      <div class="ui divided items">
        @foreach($hotels as $hotel)
        <div class="ui item">
          <div class="ui image" style="width:80px;height:auto;">
            <img src="http://placem.at/things?w=80&h=80&random=1&txt=0" alt="place holder" />
          </div>
          <div class="content">
            <a class="header">{{$hotel->$name}}</a>
            <div class="description">
              <p>
                {{$hotel->$desc}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
        <div class="ui divider">
        </div>
        <div id="paginationWrapper" style="margin-top:3em;text-align:center;">
             {!! (new Landish\Pagination\SemanticUI($hotels))->render() !!}
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
