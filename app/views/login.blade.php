@extends('templates.splash')

<!--dynamic title-->
@section('title')Login @stop

@section('content')
	
	<div class="col-md-4 col-md-offset-4">
		<div class="jumbotron">
			<div class="container text-center">		
		
				<h1>Login</h1>
				<p>Please enter your account details.</p>
				<form name = "login" action = "{{ URL::route('account-login-post') }}" method="post">
					<input type="email" name="email" placeholder="email"><br />
					<input type="password" name="pwd" placeholder="password"><br />
				
					<button class="btn btn-info btn-block login" type="submit">
							Login
					</button>
					{{ FORM::token() }}
				</form>

			</div><!--end container-->
		</div><!--end jumbotron-->
	</div>
@stop
