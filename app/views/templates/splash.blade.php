<!DOCTYPE html>

<html lang = "en">

	<head>

		<meta charset = "utf-8" name = "viewport" content = "width=device-width, initial-scale=1.0">
		
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::style('css/css.css'); }}
		
		<title>@yield('title') | Andy James Brown</title>
		
	</head>

	<body> 
		<div class="splash">
			@include('templates.nav')
			@yield('content')
		</div>
		{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}
		{{ HTML:: script('js/bootstrap.min.js') }}

	</body>

</html>
