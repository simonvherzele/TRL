<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<!-- eigen css -->
	<link rel="stylesheet" href="{{ URL::to('css/main.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/profile.css') }}">
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

</head>
<body>
	@include('includes.header')
	<div class="container">
		@yield('content')

	</div>


@include('includes.footer')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>





<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ URL::to('js/main.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(){
  $(function() {

    $('#pins-link').click(function(e) {
    $("#Postdiv").delay(100).fadeIn(100);
    $("#Mapdiv").fadeOut(100);
    $('#map-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#map-link').click(function(e) {
    $("#Mapdiv").delay(100).fadeIn(100);
    $("#Postdiv").fadeOut(100);
    $('#pins-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});
})
</script>
</body>
</html>