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

		//Create Global snapshot
		$global_snapshot                       = new GlobalSnapshot;
		$global_snapshot->snapshot_instance_id = $snapshot_instance_id;
		$global_snapshot->total_hash           = 9253929061;
		$global_snapshot->total_xmr            = 0.59083966;
		$global_snapshot->save();

		$previous_global_snapshot = GlobalSnapshot::orderBy('id', 'desc')->first();


		if ($previous_global_snapshot != NULL) {
//			$global_snapshot->monthly_hash =
		} else {
			$monthly_global_hash = $global_snapshot->total_hash;
		}

		//Create Individual snapshot
		foreach (User::all() as $user) {
			$user_hashpower_record = UserHashpowerRecord::where('email', $user->email)->first();
			if ($user_hashpower_record != NULL) {

				$previous_individual_snapshot = IndividualSnapshot::where('user_id', $user->id)->orderBy('id', 'desc')->first();

				if ($previous_individual_snapshot != NULL) {

					$monthly_hash = $user_hashpower_record->hash_12 - $previous_individual_snapshot->lifetime_hash;


					$individual_snapshot                = new IndividualSnapshot;
					$individual_snapshot->user_id       = $user->id;
					$individual_snapshot->lifetime_hash = $user_hashpower_record->hash_12;
					$individual_snapshot->monthly_hash  = $monthly_hash;
				}
			}
		}


	}
}
