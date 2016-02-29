@extends('layout.page')
@section('title', trans('title.hotel'))
@section('content')
    <div id="hotel-detail" class="ui stackable grid container">
        <div class="ten wide column">
            <p>
                {!! $hotel['body'] !!}
            </p>
        </div>
    </div>
@endsection