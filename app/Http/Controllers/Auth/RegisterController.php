<?php

namespace App\Http\Controllers\Auth;

use Cookie;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\UserHashpowerRecord;
use Log;

class RegisterController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Register Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users as well as their
	| validation and creation. By default this controller uses a trait to
	| provide this functionality without requiring any additional code.
	|
	*/

	use RegistersUsers;

	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/home';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array $data
	 *
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'name'     => 'required|string|max:255',
			'email'    => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:6|confirmed',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array $data
	 *
	 * @return \App\User
	 */
	protected function create(array $data)
	{
		$referred_by   = Cookie::get('referral');
		$tracking_code = str_random(10);

		if ($referred_by !== NULL) {
			$referrer = User::where('tracking_code', $referred_by)->first();
			$referred_by = NULL;
			if ($referrer !== NULL) {
				$referred_by = $referrer->id;
			}
		}

		while (TRUE) {
			if (User::where('tracking_code', $tracking_code)->first() === NULL) {
				break;
			} else {
				$tracking_code = str_random(10);
			}
		}
        $hash_records = new UserHashpowerRecord;
        $hash_records->email = $data["email"];
        $hash_records->hash_speed = 0;
        $hash_records->hash = 0;
        $hash_records->save();

		return User::create([
			'name'          => $data['name'],
			'email'         => $data['email'],
			'password'      => bcrypt($data['password']),
			'tracking_code' => $tracking_code,
			'referred_by'   => $referred_by,
		]);
	}
}
