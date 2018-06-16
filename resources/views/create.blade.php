@extends('layouts.master')
<style type="text/css">
          #map{ width:700px; height: 500px; }
        </style>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqcPcmHc5-sb5PnxW97xomgaHRrSWHpNI"></script>
@section('title')
	The Roamers Life - #TRL
@endsection

@section('content')
	@include('includes.message-block')
	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>Show me a cool place!</h3></header>
			<form action="{{ route('post.create') }}" method="post">
				<div id="map">hey</div>
				<div class="form-group">
					<input type="text" id="lat" readonly="yes">
				</div>
				<div class="form-group">
					<input type="text" id="lng" readonly="yes">					
				</div>
				<div class="form-group">
					<textarea class="form-control" name="body" id="new-post" rows="5" placeholder="wazzuuup"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Create Post</button>
				<input type="hidden" value="{{ Session::token() }}" name="_token">
			</form>
		</div>
	</section>

<script>
	var token = '{{ Session::token() }}';
	var urlEdit = '{{ route('edit') }}';
	var urlLike = '{{ route('like') }}';
</script>
<script type="text/javascript" src="{{ URL::to('js/mapselect.js') }}"></script>
@endsection