<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class ImportCryptoWaveUsers extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'import:user';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Import CryptoWave users.';

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
		$path = app_path('cryptowave-users.csv');
		$file = fopen($path, "r");

		$row_count = 0;

		while (($data = fgetcsv($file, 0, ",")) !== FALSE) {
			$email = $data[2];
			$this->line($email);
			if (User::where('email', $email)->first() == NULL) {
				$this->line($email);
			}
		}
	}
}
