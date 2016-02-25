@extends('layout.slider-page')
@section('title', trans('title.package'))
@section('content')
@include('partial.slider',['images'=>['/images/slider/hotels2.jpg','/images/slider/flights2.jpg',],'captions'=>[trans('home.cap2'),trans('home.cap2'),]])
@endsection

@section('scripts')
  @parent
  <script type="text/javascript">
      $('#package').addClass('active');
  </script>
@endsection
