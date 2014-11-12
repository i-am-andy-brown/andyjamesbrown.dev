@extends('templates.default')

<!--dynamic title-->
@section('title')Blog @stop

@section('content')

	<div class="col-sm-9">

		@if($posts->count())
			@foreach($posts as $post)
		
				<?php
					//make url from slug
					$slug = route('post-show', [
						'slug' => $post->slug
					]);
				?>

					<article>

						<!-- anchor url = slug/get title from database -->					
						<h2>
							<a href="{{ $slug }}">{{ $post->title }}</a>
						</h2>
					
						<!-- Display post date -->
						<p class="small">Published: {{ $post->created_at->format('j F Y') }}</p>

						<!-- 157 character limit for post body -->
						{{ Markdown::parse(Str::limit($post
							->body, 512)) }}
					
						<!-- "read more" = slug-->
						<a href="{{ $slug }}">Read more&hellip;</a>

					</article>
			
			@endforeach
		@endif
	
		<div class="row col-sm-12">	
			<!-- Add pagination links -->
			{{ $posts->links() }}
		</div>
		
	</div><!-- close col-sm-8-->
	
@stop
