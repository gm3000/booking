@extends('layout.page')
@section('title', trans('title.shopping'))

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
    <script tyle="text/javascript">
        $('#shopping').addClass('active');
    </script>
@endsection
