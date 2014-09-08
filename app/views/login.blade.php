@extends('templates.default')

<!--dynamic title-->
@section('title')Login @stop

@section('content')
	<form name = "login" action = "">
		<div class="col-sm-8">
			<h3>Login</h3>
		</div>

		<div class="col-sm-8">
			<p>
				Email: 
			</p>
		</div>
		<div class="col-sm-8">
			<input type = "email" name = "email">
		</div>	

		<div class="col-sm-8">
			<p>
				Password:
			</p>
		</div>
		<div class="col-sm-8">
			<input type = "password" name = "pwd">		
		</div>

		<div class="col-sm-8">
			<p>
				<input type = "submit" value = "Submit">
			</p>
		</div>
			
	</form>

	<!--<form name = "registration" action = "">
			<h3>Register</h3>
			<p>
				Username: <input type = "text" name = "username">
			</p>
			<p>
				Email: <input type = "email" name = "email">
			</p>
			<p>
				Confirm Email: <input type = "email" name = "email">
			</p>
			<p>
				Password: <input type = "password" name = "pwd">
			</p>
			
			<div class="col-sm-2">
				<p>
					Confirm Password: 
				</p>
			</div>
			
			<div class="col-sm6">
				<input type = "password" name = "pwd2">
			</div>
			
			<div class="col-sm-8">
				<input type = "submit" value = "Submit">
			</div>
		</form>
	</div>-->
@stop
