@extends('layout.page')
@section('title', trans('title.hotel'))
@section('content')
    <div id="hotel-detail" class="ui stackable grid container">
        <div class="thirteen wide column">
            <p></p>
            <p></p>
            <h3 class="ui left floated red header">{{$hotel->name}}</h3>
            <p>
                {!! $hotel['body'] !!}
            </p>
        </div>
    </div>
@endsection


@section('scripts')
    @parent
    <script type="text/javascript">
        $('#hotel').addClass('active');
    </script>
@endsection