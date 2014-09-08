<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		//returns posts if they are not draft versions
		$posts = Post::where('draft', '=', 0)
		//orders them so most recent is returned first
			->orderBy('created_at', 'desc')
			//5 items returned before pagination
			->paginate(5);
		
		//calls view
		return View::make('index')
			->with('posts', $posts);
	}



	/*public function email()
	{
		$user = User::find(1);
		echo '<pre>', print_r($user), '</pre>';
		
		Mail::send('emails.auth.test', array('name' => 'Andy'), function($message) {
			$message->to('andyjamesbrown@gmail.com', 'Andy Brown')->subject('Test email');
		});
	}*/
	
}
