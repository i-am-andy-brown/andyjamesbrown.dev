<?php

class PostController extends BaseController
{

	public function getIndex()
	{
		//returns posts if they are not draft versions
		$posts = Post::where('draft', '=', 0)
		//orders them so most recent is returned first
			->orderBy('created_at', 'desc')
			//5 items returned before pagination
			->paginate(5);
		
		//calls view
	return View::make('posts.read')
			->with('posts', $posts);
	}

	/*create function */

	public function create()
	{
		$post = new Post;
		$post->title = Input::get('title');
		//convert title string to slug text
		$post->slug = Str::slug(Input::get('title'));
		$post->draft = 0;
		$post->body = Input::get('body');

		$post->save();

		//redirect		
		return Redirect::route('admin');
	}

	/*read function*/
	
	//slug passed into function determines selection
	public function show($slug)
	{
		//$post var = post where $slug matches 'slug' field
		$post = Post::where('slug', '=', $slug)
			->firstOrFail();
			
		//opens 'posts/show.blade.php'
		return View::make('posts.show')
			->with('post', $post);
	}
	
	//populate edit form 
	public function edit($id)
	{
		//grab post by id number
		$post = Post::where('id', "=", $id)
			->findOrFail($id);
			
		//return 'posts/edit.blade.php'
		return View::make('posts.edit')
			->with('post', $post);
	}
	
	//pass updated data into database
	public function update($id)
	{
	
		//select post using id
		$post = Post::findOrFail($id);
		$post->title = Input::get('title');
		//convert title string to slug text
		$post->slug = Str::slug(Input::get('title'));
		$post->draft = 0;
		$post->body = Input::get('body');
		$post->save();

		//redirect
		return Redirect::route('admin');
	}

	public function destroy($id)
	{
		//select post using id
		$post = Post::findOrFail($id);
		$post->delete();
		
		//redirect	
		return Redirect::route('admin');	
	}
}
