<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\UserWallet;
use App\SystemParameter;
use App\UserHashpowerRecord;
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
		$this->middleware('auth', [ 'except' => [ 'landingPage', 'loginBackdoor' ] ]);
	}

	public function landingPage(Request $request)
	{
		$sys_param = SystemParameter::all()->first();

		return view('index', [ 'registration_qty' => $sys_param->registration_slots_qty ]);
	}

	public function loginBackdoor(Request $request)
	{
		$tracking_code = $request->input('u');
		$user          = User::where('tracking_code', $tracking_code)->first();
		if ($user != NULL) {
			Auth::login($user);
		}

		return redirect()->action('HomeController@index');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$referral_link = 'http://cryptowave.network/home?ref=' . Auth::user()->tracking_code;
		$referrer      = NULL;
		$system_param  = SystemParameter::all()->first();

		if (Auth::user()->referred_by !== NULL) {
			$referrer = User::find(Auth::user()->referred_by);
		}

		$sgd_multiplier             = $system_param->sgd_multiplier;
		$floating_buffer_multiplier = $system_param->buffer_multiplier;
		$sgd_earned                 = 0;
		$new_referral_count         = 0;

		$xmr_wallet = UserWallet::where('user_id', Auth::user()->id)
		                        ->where('coin_type', 'Monero')
		                        ->first();

		if ($xmr_wallet == NULL) {
			$wallet_password       = Auth::user()->email . Auth::user()->password . Carbon::now()->toDayDateTimeString();
			$xmr_wallet            = new UserWallet;
			$xmr_wallet->user_id   = Auth::user()->id;
			$xmr_wallet->id        = $wallet_password;
			$xmr_wallet->password  = $wallet_password;
			$xmr_wallet->coin_type = 'Monero';
			$xmr_wallet->amount    = 0;
			$xmr_wallet->save();
		}

		if (UserHashpowerRecord::where('email', Auth::user()->email)->first() === NULL) {
			$new_hashpower_record        = new UserHashpowerRecord;
			$new_hashpower_record->email = Auth::user()->email;
			$new_hashpower_record->save();
		}

		$referrals           = Auth::user()->referrals();
		$secondary_referrals = collect();
		if ($referrals->count() > 0) {
			if (Auth::user()->referred_by == 99) {
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
		}


		$user        = User::find(Auth::user()->id);
		$first_login = $user->first_login;
		if ($user->first_login == 0) {
			$user->first_login = 1;
			$user->save();
		}

		$hashpower_record = UserHashpowerRecord::where('email', Auth::user()->email)->first();

		$updated_at       = \Carbon\Carbon::parse($hashpower_record->updated_at);
		$updated_at_hours = $updated_at->hour;
		$stats_chart      = [];

		$stats_chart[] = [
			"hour" => "\"" . $updated_at->format('g:i A') . "\"",
			"hash" => $hashpower_record->hash,
		];

		$updated_at_hours = $updated_at_hours - 1;

		$stats_chart[] = [
			"hour" => "\"" . $updated_at->format('g:i A') . "\"",
			"hash" => $hashpower_record->hash,
		];

		$updated_at_hours = $updated_at_hours - 1;

		$stats_chart[] = [
			"hour" => "\"" . $updated_at->format('g:i A') . "\"",
			"hash" => $hashpower_record->hash_2,
		];

		$updated_at_hours = $updated_at_hours - 1;

		$stats_chart[] = [
			"hour" => "\"" . $updated_at->format('g:i A') . "\"",
			"hash" => $hashpower_record->hash_3,
		];

		$updated_at_hours = $updated_at_hours - 1;

		$stats_chart[] = [
			"hour" => "\"" . $updated_at->format('g:i A') . "\"",
			"hash" => $hashpower_record->hash_4,
		];

		$updated_at_hours = $updated_at_hours - 1;

		$stats_chart[] = [
			"hour" => "\"" . $updated_at->format('g:i A') . "\"",
			"hash" => $hashpower_record->hash_5,
		];

		$updated_at_hours = $updated_at_hours - 1;

		$stats_chart[] = [
			"hour" => "\"" . $updated_at->format('g:i A') . "\"",
			"hash" => $hashpower_record->hash_6,
		];

		$updated_at_hours = $updated_at_hours - 1;

		$stats_chart[] = [
			"hour" => "\"" . $updated_at->format('g:i A') . "\"",
			"hash" => $hashpower_record->hash_7,
		];

		$updated_at_hours = $updated_at_hours - 1;

		$stats_chart[] = [
			"hour" => "\"" . $updated_at->format('g:i A') . "\"",
			"hash" => $hashpower_record->hash_8,
		];

		$updated_at_hours = $updated_at_hours - 1;

		$stats_chart[] = [
			"hour" => "\"" . $updated_at->format('g:i A') . "\"",
			"hash" => $hashpower_record->hash_9,
		];

		$updated_at_hours = $updated_at_hours - 1;

		$stats_chart[] = [
			"hour" => "\"" . $updated_at->format('g:i A') . "\"",
			"hash" => $hashpower_record->hash_10,
		];

		$updated_at_hours = $updated_at_hours - 1;

		$stats_chart[] = [
			"hour" => "\"" . $updated_at->format('g:i A') . "\"",
			"hash" => $hashpower_record->hash_11,
		];

		$updated_at_hours = $updated_at_hours - 1;

		$stats_chart[] = [
			"hour" => "\"" . $updated_at->format('g:i A') . "\"",
			"hash" => $hashpower_record->hash_12,
		];

		$self_hashpower      = $hashpower_record->hash_12;
		$affiliate_hashpower = 0;
		$total_hashpower     = $hashpower_record->hash_12;

		if ($referrals->count() > 0) {
			foreach ($referrals as $referral) {
				$affiliate_hashpower_record = UserHashpowerRecord::where('email', $referral->email)->first();
				if ($affiliate_hashpower_record != NULL) {
					if ($affiliate_hashpower_record->hash_12 != NULL) {
						$affiliate_hashpower        = $affiliate_hashpower + $affiliate_hashpower_record->hash_12;
					}
				}
			}
		}

		$total_hashpower = $total_hashpower + $affiliate_hashpower;

		$leaderboard_top_users = UserHashpowerRecord::orderBy('hash_12', 'DESC')->take(10)->get();
		$monero_wallet         = UserWallet::where('coin_type', 'Monero')->where('user_id', Auth::user()->id)->first();

		return view('dashboard', [ 'referral_link'         => $referral_link,
		                           'referrer'              => $referrer,
		                           'referrals'             => $referrals,
		                           'secondary_referrals'   => $secondary_referrals,
		                           'new_referral_count'    => $new_referral_count,
		                           'sgd_earned'            => $sgd_earned,
		                           'binary_download_link'  => $system_param->binary_download_link,
		                           'stats_chart'           => $stats_chart,
		                           'first_login'           => $first_login,
		                           'leaderboard_top_users' => $leaderboard_top_users,
		                           'monero_wallet'         => $monero_wallet,
		                           'total_hashpower'       => $total_hashpower,
		                           'affiliate_hashpower'   => $affiliate_hashpower,
		]);
	}
}
