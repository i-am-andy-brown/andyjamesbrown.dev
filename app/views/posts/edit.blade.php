@extends('templates.default')

<!--dynamic title-->
@section('title')Edit Post @stop

@section('content')

	<div class = "row">
		<div class="col-sm-8">
			<div class="form-horizontal">
				<?php
	
				?>
				<p>
					<!-- Populate form with data.  Route -->
					{{ Form::model($post, [
							'method' => 'PATCH',
							'action' => ['PostController@update', 
							$post->id]
					]) }}

					{{ Form::label('title', 'Title:') }}<br />
					{{ Form::text('title') }}<br />
				</p>
				<p>
					{{ Form::label('body', 'Body:') }}<br />
					{{ Form::textarea('body') }}<br />
				</p>
				<p>
					{{ Form::submit('Update Post') }}
					{{ Form::close() }}
				</p>
			</div>
		</div><!-- close "form-horizontal" -->
		<div class="col-sm-4">
			
		</div>
	</div><!-- close row-->
		
@stop
