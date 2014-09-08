<?php
 
class Tag extends Eloquent 
{
	protected $guarded = array();
  
	public function blogposts() {
		return $this->belongsToMany('Post');
  }
}
