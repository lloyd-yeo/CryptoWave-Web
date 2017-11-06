<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$referral_link = 'http://174.138.31.231/home?ref=' . Auth::user()->tracking_code;
		$referrer      = NULL;
		if (Auth::user()->referred_by !== NULL) {
			$referrer = User::find(Auth::user()->referred_by);
		}

		$referrals           = Auth::user()->referrals();
		$secondary_referrals = collect();
		if ($referrals->count() > 0) {
			foreach ($referrals as $referral) {
				foreach ($referral->referrals() as $secondary_referral) {
					$secondary_referrals->push($secondary_referral);
				}
			}
		}

		//        return view('home', ['referral_link' => $referral_link,]);
		return view('dashboard', [ 'referral_link'       => $referral_link,
		                           'referrer'            => $referrer,
		                           'referrals'           => $referrals,
		                           'secondary_referrals' => $secondary_referrals, ]);
	}
}
