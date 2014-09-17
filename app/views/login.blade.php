@extends('templates.splash')

<!--dynamic title-->
@section('title')Login @stop

@section('content')
	
	<div class="col-md-4 col-md-offset-4">
		<div class="jumbotron">
			<div class="container">		
		
			<div class="box">
				<h2>Login</h2>

				<form name = "login" action = "">
					<input type="email" name="email" placeholder="email"><br />
					<input type="password" name="pwd" placeholder="password"><br />
				
					<button class="btn btn-info btn-block login" type="submit">
							Login
					</button>
				</form>
				</div>
			</div><!--end container-->
		</div><!--end jumbotron-->
	</div>
@stop
