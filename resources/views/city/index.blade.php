@extends('layout.slider-page')
@section('title', trans('title.hotel'))
@section('rezgate_url', '/rezgate/main.html?product=1')

@section('content')
    {{-- change city sider images --}}
    @include('partial.slider',['images'=>explode(';',$cities[0]['slider']),
             'captions'=>explode(';',$cities[0]['slider_caption'])])

    <div id="list"></div>
    <div id="city_list" class="page_container">
        <div class="ui vertically divided grid container">
            <div class="row">
                <div class="left floated five wide column">
                    <h1 class="ui {{config('app.primary_color')}} header">{{trans('city.top_dest')}}</h1>
                </div>
                <div class="right floated right aligned five wide column">
                    <form id="searchForm" class="" action="{{ action('CityController@search') }}#list" method="get" style="display:inline;">
                        <div class="ui fluid icon input">
                            <input type="text" name="query" value="{{ Request::input('query') }}" placeholder="{{ trans('site.search') }}">
                            <i id="search" class="circular search link icon"></i>
                            <input type="submit" style="display:none;">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="ui divided link items">
                        @foreach($cities as $city)
                            <a class="ui item" href="{{ action('CityController@showDetail', array($city->id)) }}">
                                <div class="ui image" style="width:200px;height:auto;">
                                    <img src="{{ $city->logo }}" alt="place holder" />
                                </div>
                                <div class="content">
                                    <div class="header">{{$city->name}}</div>
                                    <div class="description">
                                        <p>
                                            {{$city->desc}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="centered column">
                    @include('partial.pagination',['items'=>$cities,'anchor'=>'list'])
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @parent
    <script type="text/javascript">
        $('#tops').addClass('active');
        $('#search').click(function(){
            $('#searchForm').submit();
        });
    </script>
@endsection