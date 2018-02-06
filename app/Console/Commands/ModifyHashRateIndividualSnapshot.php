<?php

namespace App\Console\Commands;

use App\GlobalSnapshot;
use App\User;
use App\IndividualSnapshot;
use App\UserHashpowerRecord;
use Illuminate\Console\Command;

class ModifyHashRateIndividualSnapshot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'modify:individualsnapshot';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
    	$global_snapshot = GlobalSnapshot::first();
    	$individual_snapshots = IndividualSnapshot::where('snapshot_instance_id', 2)->get();
    	foreach ($individual_snapshots as $individual_snapshot) {
    		$user = User::find($individual_snapshot->user_id);
    		if ($user != NULL) {
    			$userhashpower_record = UserHashpowerRecord::where('email', $user->email)->first();
    			if ($userhashpower_record != NULL) {
				    $individual_snapshot->monthly_hash = $userhashpower_record->xmr_pool_hashrecord;
				    $individual_snapshot->lifetime_hash = $userhashpower_record->xmr_pool_hashrecord;
				    $individual_snapshot->xmr = ($userhashpower_record->xmr_pool_hashrecord / $global_snapshot->monthly_hash) * $global_snapshot->monthly_xmr;
				    $individual_snapshot->save();
    			}
		    }
	    }
    }
}
