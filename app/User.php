<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use HasApiTokens, Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password', 'referred_by', 'tracking_code',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function referrals()
	{
		return User::where('referred_by', $this->id)->get();
	}

	public function wallets()
	{
		return $this->hasMany('App\UserWallet');
	}

	public function lifetimeHashpower()
	{
		$hashpower_record = UserHashpowerRecord::where('email', $this->email)->first();
		if ($hashpower_record == NULL) {
			return 0;
		} else {
			return $hashpower_record->hash_12 + $hashpower_record->cryptowave_pool_hashrecord;
		}
	}
}
