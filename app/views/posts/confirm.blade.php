@extends('templates.default')

<!--dynamic title-->
@section('title')Admin @stop

@section('content')

	<a href="#confirm" class="btn" data-toggle="modal">Delete</a>

	<div class = "modal fade" id = "confirm" role = "dialog">
		<div class = "modal-dialog">
			<div class = "modal-content col-sm-12">
				<div class="text-center">
					<h2>Are you sure you want to delete the post?</h2>
					<a href="{{ 'admin'}}" class="btn">Cancel</a>
					<a href="{{ action('PostController@destroy', ['id' 
						=> $post->id]) }}" class="">Delete</a>
				</div>
			</div><!-- close "modal-content" -->
		</div><!-- close "modal-dialog" -->
	</div><!-- close "modal fade" -->

@stop
