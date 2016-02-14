@extends('layout.master')
@section('title', 'PICC - Home')

@section('styles')
    @parent
    <link rel="stylesheet" type="text/css" href="/css/lightslider.min.css">
    <style>
        .home-slide {
            display: block;
            height: 768px;
            background-color: #00A6C7;
            background-size: cover;
            background-position: center center;
        }
    </style>
@endsection

@section('content')
<div>
    <ul id="home-slider">
        <li>
            <div id="slide1" class="home-slide" style="background-image: url(/images/slider/travel1.jpg);"></div>
        </li>
        <li>
            <div id="slide2" class="home-slide" style="background-image: url(/images/slider/travel2.jpg);"></div>
        </li>
        <li>
            <div id="silde3" class="home-slide" style="background-image: url(/images/slider/travel3.jpg);"></div>
        </li>
    </ul>
</div>

@endsection

@section('scripts')
	@parent
    <script src="/js/lightslider.min.js"></script>
	<script type="text/javascript">
		$('.menu .item').removeClass('active');
		$('#home').addClass('active');

        $('#home-slider').lightSlider(
                {
                    item: 1,
                    mode: 'fade',
                    auto: true,
                    loop: true,
                    controls: true,
                    pause: 4000,
                    speed: 800,

                }
        );

	</script>
@endsection
