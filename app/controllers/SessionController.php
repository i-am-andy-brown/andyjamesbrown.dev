<?php

class PostController extends BaseController
{
	public function create()
	{
		return View::make('sessions.create');
	}
	
	public function store()
	{
		$input = Input::all();
		
		$attempt = Auth::attempt([
			'email'=> $input['email'],
			'password' => $input['password']
		]);
		
		if ($attempt) return Redirect::intended('/');
		
		dd('problem');
	}
	

	public function destroy() 
	{
		Auth::logout();
		return Redirect::home();
	}
