<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use App\UserWallet;
use App\UserHashpowerRecord;
use App\SystemParameter;

class GetLatestXMRDistribution extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'generate:xmrdistribution';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Get latest XMR snapshot';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$users        = User::all();
		$sys_param    = SystemParameter::first();
		$total_hashes = $sys_param->total_hashes;
		$xmr_mined    = $sys_param->total_xmr_mined;

		foreach ($users as $user) {
			$xmr_wallet = UserWallet::where('coin_type', 'Monero')->where('user_id', $user->id)->first();
			if ($xmr_wallet != NULL) {
				$hashpower_record = UserHashpowerRecord::where('email', $user->email)->first();
				if ($hashpower_record != NULL) {
					$latest_hash            = $hashpower_record->hash_11;
					$distributed_percentage = $latest_hash / $total_hashes;
					$xmr_wallet->amount              = $distributed_percentage * $xmr_mined;
					$xmr_wallet->save();
				}
			}
		}

	}
}
