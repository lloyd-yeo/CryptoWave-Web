<?php

namespace App\Console\Commands;

use App\GlobalSnapshot;
use App\IndividualSnapshot;
use App\SnapshotInstance;
use App\User;
use App\UserHashpowerRecord;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SnapshotHashAndXMR extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'snapshot:xmrhash';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Monthly command to run & snapshot current XMR + Hash contributed';

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
		//Create a new snapshot instance, for which to tie all other snapshots together.
		$snapshot_instance                = new SnapshotInstance;
		$snapshot_instance->instance_date = Carbon::now()->startOfDay();
		$snapshot_instance->save();

		$snapshot_instance_id = $snapshot_instance->id;

		$previous_global_snapshot = GlobalSnapshot::orderBy('id', 'desc')->first();

		//Create Global snapshot
		$global_snapshot                       = new GlobalSnapshot;
		$global_snapshot->snapshot_instance_id = $snapshot_instance_id;
		$global_snapshot->total_hash           = 9253929061;
		$global_snapshot->total_xmr            = 0.59083966 * 0.8;
		$global_snapshot->save();

		$monthly_global_hash = 0;
		$monthly_xmr = 0;

		if ($previous_global_snapshot != NULL) {
			$monthly_global_hash = $global_snapshot->total_hash - $previous_global_snapshot->total_hash;
			$monthly_xmr = $global_snapshot->monthly_xmr - $previous_global_snapshot->monthly_xmr;
		} else {
			$monthly_global_hash = $global_snapshot->total_hash;
			$monthly_xmr = $global_snapshot->total_xmr;
		}

		$global_snapshot->monthly_hash = $monthly_global_hash;
		$global_snapshot->monthly_xmr = $monthly_xmr;
		$global_snapshot->save();

		//Create Individual snapshot
		foreach (User::all() as $user) {
			$user_hashpower_record = UserHashpowerRecord::where('email', $user->email)->first();
			if ($user_hashpower_record != NULL) {

				$previous_individual_snapshot = IndividualSnapshot::where('user_id', $user->id)->orderBy('id', 'desc')->first();

				if ($previous_individual_snapshot != NULL) {
					$monthly_hash = $user_hashpower_record->hash_12 - $previous_individual_snapshot->lifetime_hash;
					$xmr = ($monthly_hash / $monthly_global_hash) * $monthly_xmr;
				} else {
					$monthly_hash = $user_hashpower_record->hash_12;
					$xmr = ($monthly_hash / $monthly_global_hash) * $monthly_xmr;
				}

				$individual_snapshot                = new IndividualSnapshot;
				$individual_snapshot->snapshot_instance_id = $snapshot_instance_id;
				$individual_snapshot->user_id       = $user->id;
				$individual_snapshot->lifetime_hash = $user_hashpower_record->hash_12;
				$individual_snapshot->monthly_hash  = $monthly_hash;
				$individual_snapshot->xmr = $xmr;
				$individual_snapshot->save();
			}
		}


	}
}
