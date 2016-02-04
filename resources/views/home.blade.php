@extends('layout.master')
@section('title', 'PICC - Home')

@section('content')
this is home page
@endsection

@section('scripts')
	@parent
	<script type="text/javascript">
		$('.menu .item').removeClass('active');
		$('#home').addClass('active');
	</script>
@endsection