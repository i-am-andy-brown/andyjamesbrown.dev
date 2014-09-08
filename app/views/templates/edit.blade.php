@extends('templates.default')

<!--dynamic title-->
@yield('title')Edit @stop

@section('content')

	{{ Form::model($post) }}
	
		<div>
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title'), $post->'title' }}
		</div>
		<div>
			{{ Form::label('body', 'Body:') }}
			{{ Form::textarea('body') }}
		</div>
		
		</div>
			{{ Form::submit('Update Post') }}
		</div>
		
	{{ Form::close() }}

@stop
