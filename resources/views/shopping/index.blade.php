@extends('layout.page')
@section('title', trans('title.shopping'))
@section('styles')
    @parent
    <style>
        #shopping-list {
            margin-top: 2rem;
        }
    </style>
@endsection
@section('content')
    <div id="shopping-list" class="ui grid container">
        <div class="ui row">
            <div class="column">
                <h1 class="ui header">{{trans('shopping.title')}}</h1>
            </div>
        </div>
        <div class="ui row">
            <div class="column">
                {{$shoppings}}
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        $('#shopping').addClass('active');
    </script>
@endsection