@extends('layout.slider-page')
@section('title', trans('title.hotel'))
@section('content')
{{-- change hotel sider images --}}
@include('partial.slider',['images'=>['/images/slider/travel1.jpg','/images/slider/travel2.jpg','/images/slider/travel3.jpg']])
<div class="ui grid container">
  <div class="ui header">
    this is hotel list page
  </div>
</div>
@endsection
@section('scripts')
  @parent
  <script src="/js/hotel.js"></script>
@endsection
