
@extends('templates.default')

@section('title'){{ $post->title }} @stop

@section('content')

	<div class = "row">
		<div class="col-sm-8">

		<article>

			<!-- title anchor url = slug -->
			<h2><a href="{{ route('post-show', ['slug' 
				=> $post->slug]) }}">{{ $post->title }}</a></h2>

			<!-- Display post date -->
			<p class="small">Published: {{ $post->created_at->format('jS F Y') }}</p>
			
			<!-- Parse post body-->
			{{ Markdown::parse($post->body) }} 
		
		</article>

	</div>
</div>
@stop
