<nav>
	<div class = "navbar navbar-inverse navbar-static-top">
		<div class = "container-fluid">
			
			<a href = "{{ URL::route('index') }}" class = "navbar-brand">Andy James Brown</a>
			
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="{{ URL::route('index') }}">Home</a>
					</li>
					<li>
						<a href="{{ URL::route('blog') }}">Blog</a>
					</li>
					<li>
						<a href="{{ URL::route('admin') }}">Admin</a>
					</li>
					<li>
						<a href="{{ URL::route('login') }}">Login</a>
					<li>					
				</ul>
			
		</div>
	</div>
</nav>
