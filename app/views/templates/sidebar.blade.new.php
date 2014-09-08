<div class="col-sm-3">
	<h3>Categories</h3>
	<nav>
	
		<ul class="list-group">
			<li class="list-group-item">
				<!-- count all posts-->
				<a href="{{ URL::route('index') }}">All posts</a>
				
				<?php 
					//varify $post set, and if so return count
					if (isset($post))
					{
						echo '<span class="badge">';
						echo $post->count();
						echo '</span>';
					}
				?>
				
			</li>

			
			@if($tags->count())
				@foreach($tags as $tag)
		
					<?php
						//make url from slug
						$tagURL = route('tag-show', [
							'tag' => $tag->category
						]);
					?>

					<li class="list-group-item">
						<a href="{{ $tagURL }}">{{ $tagURL }}</a>
					</li>
			
				@endforeach
			@endif
		
		</ul>
	</nav>
</div>