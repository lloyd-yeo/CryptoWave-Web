<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use App\HourlySnapshot;

class TakeHourlySnapshot extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'snapshot:hourly';

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
		$users = User::all();
		foreach ($users as $user) {
			$hashpower                  = $user->lifetimeHashpower();
			$hourly_snapshot            = new HourlySnapshot;
			$hourly_snapshot->user_id   = $user->id;
			$hourly_snapshot->hashpower = $hashpower;
			$hourly_snapshot->save();
		}
	}
}
