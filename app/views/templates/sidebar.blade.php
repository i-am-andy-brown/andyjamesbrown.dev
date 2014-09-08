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



		</ul>
	</nav>
</div>
