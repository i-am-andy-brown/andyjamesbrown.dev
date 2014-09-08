<?php

class AdminController extends BaseController {


	//show page (app/views/admin.blade.php)
	public function index()
	{
		//returns posts if they are not draft versions
		$posts = Post::where('draft', '=', 0)
			//orders them so most recent is returned first
			->orderBy('created_at', 'desc')
			//5 items returned before pagination
			->paginate(5);
		
		//calls view
		return View::make('admin')
			->with('posts', $posts);
	}
	
}
