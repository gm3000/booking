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
	<script type="text/javascript">
		$('.partner').dimmer({
            opacity: '0.1',
            on: 'hover'
        });

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
                            srct:'/images/thumbnails/lasvegas.jpg',
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
