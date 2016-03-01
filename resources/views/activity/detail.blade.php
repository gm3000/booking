@extends('layout.page')
@section('title', trans('title.activity'))
@section('content')
    <div class="page_container">
        <div id="activity-detail" class="ui stackable grid container">

        </div>
    </div>
@endsection


@section('scripts')
    @parent
    <script type="text/javascript" src="/js/activity.js"></script>
@endsection