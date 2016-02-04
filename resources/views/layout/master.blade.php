<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/semantic.min.css">
    <style>
        #navigator .menu {
            padding-left:150px;
            border-radius: 0;
            font-size:small;
        }

        #header {
            padding-top:25px;
            padding-bottom:0;
        }

        #header a{
            font-size:smaller;
        }

        #navigator .menu .item{
            padding-top: 3px;
            padding-bottom: 3px;
        }
    </style>
</head>
<body>
<div id="container" class="ui grid">
    <div id="header" class="ui three column row">
        <div class="ui column">
            this is header area
        </div>
        <div class="ui column">
            this is header area
        </div>
        <div class="ui center aligned column">
            <div class="basic segment">
                <a href="/setlanguage?lang=cn" style="margin-right:13px;"><i class="cn flag"></i>中文</a>
                <a href="/setlanguage?lang=en"><i class="us flag"></i>English</a>
            </div>
        </div>
    </div>
    <div id="navigator" class="ui row">
        <div class="ui column">
            <div class="ui red inverted icon menu">
                <a id="home" class="item" href="/home"><i class="large home icon"></i></a>
                <a id="hotel" class="item" href="#">{{ trans('menu.hotel') }}</a>
                <a class="item" href="#">{{ trans('menu.flight') }}</a>
                <a class="item" href="#">{{ trans('menu.package') }}</a>
                <a class="item" href="#">{{ trans('menu.VipProgram') }}</a>
                <a class="item" href="#">{{ trans('menu.shopping') }}</a>
                <a class="item" href="#">{{ trans('menu.activity') }}</a>
                <a class="item" href="#">{{ trans('menu.TopDestination') }}</a>
            </div>
        </div>
    </div>
    <div id="content" class="ui row" style="min-height:350px;">
        <div class="ui column">
            @yield('content')
        </div>
    </div>
    <div id="footer" class="ui row">
        <div class="ui column">
            this is footer
        </div>
    </div>
</div>
@section('scripts')
<script src="/js/jquery.min.js"></script>
<script src="/js/semantc.min.js"></script>
<script type="text/javascript">
    $('.menu .item').removeClass('active');
</script>
@show
</body>
