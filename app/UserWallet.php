<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
	public $incrementing = false;

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
	];
}
