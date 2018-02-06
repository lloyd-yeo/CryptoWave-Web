<?php

namespace App\Console\Commands;

use App\User;
use App\UserHashpowerRecord;
use Illuminate\Console\Command;

class ImportXMRPoolStats extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'import:xmrpoolstats';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Import the final snapshots from the XMR Pool.';

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
		$path = app_path('crypto-user-xmr-result.csv');
		$file = fopen($path, "r");

		$row_count = 0;

		while (($data = fgetcsv($file, 0, ",")) !== FALSE) {

			if ($row_count == 0) {
				$row_count++;
				continue;
			}

			$name   = $data[1];
			$email  = $data[2];
			$result = $data[8];
			$result = preg_replace('/[.,]/', '', $result);

			$user = User::where('email', $email)->first();

			if ($user != NULL) {
				$userhashpower_record = UserHashpowerRecord::where('email', $user->email)->first();
				if ($userhashpower_record != NULL) {
					$userhashpower_record->xmr_pool_hashrecord = $result;
					if ($userhashpower_record->save()) {
						$this->line("[" . $email . "] final hashpower record from XMR Pool: " . $result);
					}
				}
			}
		}
	}
}
