<div class="col-sm-3">
	<div class="row">
		<h3>Categories</h3>
	</div>

	<nav>
	
		<ul class="list-group">
			<li class="list-group-item row">
			
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
</div><!--end col-sm-3-->
