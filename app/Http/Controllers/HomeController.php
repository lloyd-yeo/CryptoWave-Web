<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\UserWallet;
use App\SystemParameter;
use Carbon\Carbon;

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
		$system_param  = SystemParameter::all()->first();

		if (Auth::user()->referred_by !== NULL) {
			$referrer = User::find(Auth::user()->referred_by);
		}

		$sgd_multiplier             = $system_param->sgd_multiplier;
		$floating_buffer_multiplier = $system_param->buffer_multiplier;
		$sgd_earned                 = 0;
		$new_referral_count         = 0;

		if (UserWallet::where('user_id', Auth::user()->id)->first() === NULL) {
			$job = new \App\Jobs\CreateEthereumWallet(User::find(Auth::user()->id));
			dispatch($job);
		} else {
			$sgd_earned_val = $floating_buffer_multiplier * $sgd_multiplier * Auth::user()->wallets->first()->amount;
			$sgd_earned     = number_format($sgd_earned_val, 2, '.', '');;
		}


		$referrals           = Auth::user()->referrals();
		$secondary_referrals = collect();
		if ($referrals->count() > 0) {
			foreach ($referrals as $referral) {
				$created_at_carbon = Carbon::parse($referral->created_at);
				if ($created_at_carbon->isToday()) {
					$new_referral_count++;
				}
				foreach ($referral->referrals() as $secondary_referral) {
					$secondary_referrals->push($secondary_referral);
				}
			}
		}

		return view('dashboard', [ 'referral_link'        => $referral_link,
		                           'referrer'             => $referrer,
		                           'referrals'            => $referrals,
		                           'secondary_referrals'  => $secondary_referrals,
		                           'new_referral_count'   => $new_referral_count,
		                           'sgd_earned'           => $sgd_earned,
		                           'binary_download_link' => $system_param->binary_download_link,
		]);
	}
}
