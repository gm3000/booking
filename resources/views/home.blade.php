@extends('layout.master')
@section('title', 'PICC - Home')

@section('content')
this is home page
@endsection

@section('scripts')
	@parent
	<script type="text/javascript">
		$('#home').addClass('active');
	</script>
@endsection