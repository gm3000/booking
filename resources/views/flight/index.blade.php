@extends('layout.slider-page')
@section('title', trans('title.flight'))
@section('content')
@include('partial.slider',['images'=>['/images/slider/flights1.jpg','/images/slider/flights2.jpg','/images/slider/flights3.jpg',]])
@endsection
