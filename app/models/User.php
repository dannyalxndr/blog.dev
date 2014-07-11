<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public function setUsernameAttribute($value)
	{
	    $this->attributes['username'] = strtolower($value);
	}

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function posts()
	{
	    return $this->hasMany('Post');
	}
	public function canManagePost($post)
	{
		return $this->isAdmin() || $this->id == $post->user_id;
	}

}
