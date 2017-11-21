<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SystemParameter;
use App\User;

class SignUpController extends Controller
{
	public function signup(Request $request)
	{
		$sys_param = SystemParameter::all()->first();

		return view('signup', [ 'registration_qty' => $sys_param->registration_slots_qty ]);
	}

	public function validateReferral(Request $request)
	{

		$email         = $request->input('email');
		$referral_code = $request->input('referral_code');

		$sys_param = SystemParameter::all()->first();

		if ($sys_param->registration_slots_qty < 1) {
			session()->flash('error', 'No more registration slots left!');

			return back()->withInput();
		}

		$referrer = User::where('email', $email)->first();
		if ($referrer === NULL) {
			if ($referral_code == $sys_param->master_referral_code) {
				return redirect('register');
			} else {
				session()->flash('error', 'This user doesn\'t exists!');

				return back()->withInput();
			}
		} else {
			if ($referral_code == $referrer->tracking_code || $referral_code == $sys_param->master_referral_code) {
				return redirect('register')
					->withCookie(cookie()->forever('referral', $referrer->tracking_code));
			} else {
				session()->flash('error', 'Invalid referral code! Please double-check!');

				return back()->withInput();
			}
		}

	}
}
