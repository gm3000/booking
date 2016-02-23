@extends('layout.page')
@section('title', trans('title.shopping'))
@section('styles')
    @parent
    <style>
        
    </style>
@endsection
@section('content')
    <div id="shopping-detail" class="ui grid container">
        <div class="ui row">sfsdf</div>
        <div class="ui row">sdfsd</div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        $('#shopping').addClass('active');
    </script>
@endsection