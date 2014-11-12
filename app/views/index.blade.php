@extends('templates.splash')

<!--dynamic title-->
@section('title')Home @stop

@section('content')
<div class="splash">	
	<div class="col-md-4 col-md-offset-4">		
		
		<div class="jumbotron">
			<div class="container text-center">	
				<h1>Hire me!</h1>
				<p>I'm a web developer looking for a new challenge.</p>
					<a href="{{ URL::route('index') }}#about" class="btn btn-info btn-block">More&hellip;</a>
			</div>
		</div>
	</div>
</div>
<div id="about">
	<!--<div class="jumbotron">-->
		<div class="col-md-8 col-md-offset-2">
			<h1>My name is Andy</h2>
			<h2>I'm a web developer based in East Yorkshire and Manchester.</h2>
			<h3>My enthusiasm for technology has always been evident.  I began building the skills necessary for a successful career in web development from a bizarrely early age - I recall programming the demos from my Sinclair ZX Spectrum+ manual when only 4 years old.  Of course, I didn't complete my BSc (hons) in Software Design & Development until some time later.</h3>
			<h3>After gaining an undergraduate degree, I became a further education IT teacher where I would impart knowledge of software packages and scripting languages to my students.</h3>			
			<h3>I enjoy building websites using various technologies including HTML, CSS, PHP (including frameworks such as <a href="http://www.codeigniter.com/">CodeIgniter</a> and <a href="http://laravel.com/">Laravel</a>), MySQL, and jQuery.</h3>
			<h3>You can contact me via email <a href="mailto:andyjamesbrown@gmail.com?subject=Job%20Offer">here</a>.</h3>
		</div>		
	</div>
</div><!-- end about-->
@stop
