<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>@yield('title')</title>
    @section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/semantic-ui/2.1.8/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="/css/lightslider.min.css">
    <link rel="stylesheet" href="/css/nanoGALLERY/nanogallery.min.css">
    <link rel="stylesheet" href="/css/nanoGALLERY/themes/light/nanogallery_light.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/page.css">
    @show

</head>
<body>
<div id="container" class="ui grid">
    <div id="header" class="ui three column row">
        <div class="ui center aligned column">
            <img src="/images/PICC_logo.png" alt="PICC logo" style="margin-right:0.618em;"/>
            <img src="/images/happybookings_logo.png" alt="happybookings logo"/>
        </div>
        <div class="ui column">
        </div>
        <div class="ui center aligned column">
            <div class="basic segment" style="padding-top:7px;" data-no-turbolink>
                <a href="/setlanguage?lang=cn" style="margin-right:13px;"><i class="cn flag"></i>中文</a>
                <a href="/setlanguage?lang=en"><i class="us flag"></i>English</a>
            </div>
        </div>
    </div>
    <div id="navigator" class="ui row">
        <div class="ui column">
            <div class="ui red inverted icon menu">
                <a id="home" class="item" href="/home"><i class="large home icon"></i></a>
                <a id="hotel" class="item" href="/hotels">{{ trans('menu.hotel') }}</a>
                <a class="item" href="#">{{ trans('menu.flight') }}</a>
                <a class="item" href="#">{{ trans('menu.package') }}</a>
                <a id="vipprogram" class="item" href="/vipprograms">{{ trans('menu.VipProgram') }}</a>
                <a id="shopping" class="item" href="/shopping">{{ trans('menu.shopping') }}</a>
                <a class="item" href="#">{{ trans('menu.activity') }}</a>
                <a class="item" href="#">{{ trans('menu.TopDestination') }}</a>
            </div>
        </div>
    </div>
    @section('bookingContainer')
    <div id="bookingContainer" class="ui grid" style="position:absolute;left:100px;top:160px;width:90%;z-index:999">
         <div class="ui row">
            <div class="ui seven wide column">
            </div>
            <div class="ui nine wide column">
              <iframe id="bec_container_frame" frameborder="0" src="/main.html" scrolling="no" width="630" height="430"></iframe>
            </div>
         </div>
    </div>
    @show
    <div id="content" class="ui row" style="min-height:450px;margin-bottom:3em;">
        <div class="ui column">
            @yield('content')
        </div>
    </div>
    @include('partial.footer_'.App::getLocale())
</div>
@section('scripts')
<script type="text/javascript" src="//cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.turbolinks.min.js"></script>
<script type="text/javascript" src="/js/turbolinks.min.js"></script>
<script type="text/javascript" src="//cdn.bootcss.com/semantic-ui/2.1.8/semantic.min.js"></script>
<script type="text/javascript" src="/js/menu.js"></script>
@show

</body>
