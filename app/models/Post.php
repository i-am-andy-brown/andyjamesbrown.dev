<?php

//interact with 'posts' table
class Post extends Eloquent
{
	protected $guarded = array();
	
	public function tags() {
		//defines belongsToMany relationship
		return $this->belongsToMany('Tag');    
  }
}

