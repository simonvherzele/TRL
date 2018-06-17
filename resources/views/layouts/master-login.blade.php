<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
<!-- Bootstrap oude versie-->
	<!--
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	-->
	

<!-- bootstrap nieuwere versie -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


	<link rel="stylesheet" href="{{ URL::to('css/login.css') }}">

	<script
  		src="https://code.jquery.com/jquery-3.3.1.min.js"
  		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  		crossorigin="anonymous">
  	</script>

  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

  	<!-- google fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400" rel="stylesheet">

</head>
<body">

	<div class="container">
		@yield('content')

	</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="{{ URL::to('js/main.js') }}"></script>

<script>
    $(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		//$('#register-form-link').removeClass('active');
		//$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		//$('#login-form-link').removeClass('active');
		//$(this).addClass('active');
		e.preventDefault();
		});

	});
</script>
</body>
</html>