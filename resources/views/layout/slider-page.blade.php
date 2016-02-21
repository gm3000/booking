@extends('layout.master')

@section('styles')
    @parent
    <link rel="stylesheet" type="text/css" href="/css/lightslider.min.css">
    <link rel="stylesheet" href="/css/nanoGALLERY/nanogallery.min.css">
    <link rel="stylesheet" href="/css/nanoGALLERY/themes/light/nanogallery_light.min.css">
    <style>
        .home-slide {
            display: block;
            height: 768px;
            background-color: #00A6C7;
            background-size: cover;
            background-position: center center;
        }

        #home-detail{
            margin-top: 5rem;
        }

        #home-partner {
            padding-top: 4px;
        }
    </style>
@endsection

@section('scripts')
	@parent
    <script src="/js/lightslider.min.js"></script>
    <script src="/js/jquery.nanogallery.min.js"></script>
    <script src="/js/slider.js"></script>
@endsection
