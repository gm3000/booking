@extends('layout.master')
@section('title', 'PICC - Home')

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
<div id="home-detail">
    <div class="ui grid container">
        <div class="eleven wide column">
            <div id="home-gallery"></div>
        </div>
        <div class="five wide column">
            <div class="ui segment">
                xixixixi
            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')
	@parent
    <script src="/js/lightslider.min.js"></script>
    <script src="/js/jquery.nanogallery.min.js"></script>
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

        $('#home-gallery').nanoGallery(

                {
                    thumbnailWidth: 'auto',
                    thumbnailHeight: 250,

                    theme: "light",

                    //thumbnailAlignment: "justified",
                    thumbnailGutterWidth : 0,
                    thumbnailGutterHeight : 0,
                    thumbnailHoverEffect: [{ name: 'labelAppear75', duration: 300 }],
                    thumbnailLabel: {
                                        display: true,
                                        position: 'overImageOnMiddle',
                                        align: 'center',
                                        hideIcons: true,
                                    },
                    fnThumbnailOpen: function(items){
                        window.location.href=items[0].src;
                    },
                    items: [
                        {
                            src:'/about',
                            srct:'/images/thumbnails/LasVegas.jpg',
                            title: "LasVegas"
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/newyork.jpg',
                            title: 'NewYork'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/london.jpg',
                            title: 'London'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/chicago.jpg',
                            title: 'Chicago'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/paris.jpg',
                            title: 'Paris'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/tokyo.jpg',
                            title: 'Tokyo'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/orlando.jpg',
                            title: 'Orlando'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/sydney.jpg',
                            title: 'Sydney'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/losangeles.jpg',
                            title: 'Los Angeles (LA)'
                        }]
                }

        );

	</script>
@endsection
