<?php

class TagController extends BaseController {

	public function all()
	{
		//$show all tags in tag table
		$tags = Tag::all();

		//opens 'tags/all.blade.php'
		return View::make('tags.all')
			//passes table tags as $tags variable
			->with('tags', $tags);
	}

	public function sidebar()
	{
		//$tag var = where category matches $tagURL
		$tags = Tag::all();

		//opens 'posts/show.blade.php'
		return View::make('templates.sidebar')
			->with('tags', $tags);
	}

	

	public function show($tag)
	{
		//pull records with category field equal to url label
		$tag = Tag::where('category', '=', $tag);
		
		return View::make('tags.show')
		 ->with('tag', $tag);
	}

}
