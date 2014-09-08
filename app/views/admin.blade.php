@extends('templates.default')

<!--dynamic title-->
@section('title')Admin @stop

@section('content')

	<div class="col-sm-8">

		@if($posts->count())
			@foreach($posts as $post)

			<?php $slug = route('post-show', ['slug' 
				=> $post->slug]);
				
			?>

			<article>
				
				<h2><a href="{{ $slug }}">{{ $post->title }}</a></h2>
					
				<!-- Display post date -->
				<p class="small">Published: {{ $post->created_at->format('j F Y') }}</p>
						
				<!--157 post body limit -->
				{{ Markdown::parse(Str::limit($post->body, 157)) }}

				<!-- "read more" = slug -->
				<a href="{{ $slug }}">Read more&hellip;</a>
					
				<div class="pull-right">
					<a href="{{ route('post-edit', ['id' 
						=> $post->id]) }}" class="btn">Edit</a>
					|
					<!--<a href="{{ action('PostController@destroy', ['id' 
						=> $post->id]) }}" class="btn">Delete</a>-->
					
					<a href="#confirm" class="btn" data-toggle="modal">Delete</a>

				</article>
					
			@endforeach
		@endif
	
		<div class="row col-sm-12">	
			<!-- Add pagination links -->
			{{ $posts->links() }}
		</div>
	
		<!-- Add new post form -->
		<div class="col-sm-4">
			<h2>Add Post</h2>
			<!-- new form, submitted to posts.create -->
			<p>
				{{ Form::open(array('action' 
					=> 'PostController@create')) }}
				{{ Form::label('title', 'Title:') }}<br />
				{{ Form::text('title') }}<br />
			</p>
			<p>
				{{ Form::label('body', 'Body:') }}<br />
				{{ Form::textarea('body') }}<br />
			</p>
			<p>
				{{ Form::submit('Create Post') }}
				{{ Form::close() }}
			</p>
		</div>	

	</div><!-- close col-sm-8 -->

@stop
