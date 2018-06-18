@extends('layouts.master')
<style type="text/css">
          #map{ width:200%; height: 50%; }
        </style>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqcPcmHc5-sb5PnxW97xomgaHRrSWHpNI"></script>
@section('title')
	The Roamers Life - #TRL
@endsection



@section('content')
	@include('includes.message-block')

<div class="container bg-white">
	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>Show me a cool place!</h3></header>
			<form action="{{ route('post.create') }}" method="post">
				<div id="map"></div>
				<div class="form-group">
					<input class="form-control d-none" type="text" id="lat" readonly="yes" name="lat">
				</div>
				<div class="form-group">
					<input class="form-control d-none" type="text" id="lng" readonly="yes" name="lng">					
				</div>
				<p class="font-weight-bold mt-5">Let others see how cool your place is</p>

				<div class="custom-file">
						<label class="custom-file-label" for="fileToUpload">Choose photo</label>
  						<input type="file" class="custom-file-input form-control" name="fileToUpload" id="fileToUpload" >
				</div>
				<div class="form-group mt-5">
					<label for="body" class="font-weight-bold">Write a caption, or some tips for other hickers</label>
					<textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Describe this place"></textarea>
				</div>


				<div>
				<p class="font-weight-bold mt-5">Choos a category</p>
	<div class="btn-group " data-toggle="buttons">
		<label class="btn btn-dark mr-2">
			<input type="checkbox" class="mr-2" >Beach
			<span class="fa fa-check"></span>
		</label>
		<label class="btn btn-dark mr-2">
			<input type="checkbox" class="mr-2"> Mountains
			<span class="fa fa-check"></span>
		</label>
		<label class="btn btn-dark mr-2">
			<input type="checkbox" class="mr-2"> Cave
			<span class="fa fa-check"></span>
		</label>
		<label class="btn btn-dark mr-2">
			<input type="checkbox" class="mr-2"> River
			<span class="fa fa-check"></span>
		</label>
		<label class="btn btn-dark mr-2">
			<input type="checkbox" class="mr-2"> Monument
			<span class="fa fa-check"></span>
		</label>
		<label class="btn btn-dark mr-2">
			<input type="checkbox" class="mr-2">bridge
			<span class="fa fa-check"></span>
		</label>
	</div>
</div>



				<button type="submit" class="btn btn-brown mt-5">Create Pin<img class="arrow" src="{{ asset('img/arrow.png') }}"></button>
				<input type="hidden" value="{{ Session::token() }}" name="_token">
			</form>
		</div>
	</section>





</div>
<script>
	var token = '{{ Session::token() }}';
	var urlEdit = '{{ route('edit') }}';
	var urlLike = '{{ route('like') }}';
</script>
<script type="text/javascript" src="{{ URL::to('js/mapselect.js') }}"></script>
@endsection