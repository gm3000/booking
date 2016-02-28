@extends('layout.slider-page')
@section('title', trans('title.hotel'))
@section('rezgate_url', '/rezgate/main.html?product=1')

@section('content')
    {{-- change city sider images --}}
    @include('partial.slider',['images'=>['/images/slider/hotels1.jpg','/images/slider/hotels2.jpg','/images/slider/hotels3.jpg'],'captions'=>[trans('hotel.slider1'),trans('hotel.slider2'),trans('hotel.slider3'),]])



@endsection

@section('scripts')
    @parent
    <script type="text/javascript">
        $('#tops').addClass('active');
    </script>
@endsection