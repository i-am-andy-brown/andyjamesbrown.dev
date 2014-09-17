<!DOCTYPE html>

<html lang = "en">

	<head>

		<meta charset = "utf-8" name = "viewport" content = "width=device-width, initial-scale=1.0">
		
		{{ HTML::style('css/css.css'); }}
		{{ HTML::style('css/bootstrap.min.css'); }}
		
		<title>@yield('title') | Andy James Brown</title>
		
	</head>

	<body>
		
		@include('templates.nav')
		
		<div class = "container">
			<div class="row col-sm-12">
				<h1>My Blog</h1>	
			</div><!-- close "row col-sm-12"-->
				@include('templates.sidebar')
				@yield('content')
		</div>

		{{ HTML::script('js/jquery.js') }}
		{{ HTML:: script('js/bootstrap.min.js') }}

	</body>

</html>
