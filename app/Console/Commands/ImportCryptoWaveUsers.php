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
	protected $signature = 'import:users';

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

			if ($row_count == 0) {
				$row_count++;
				continue;
			}

			$name           = $data[1];
			$email          = $data[2];
			$password       = $data[3];
			$referred_by_id = $data[7];
			$tracking_code  = $data[8];
			
			if (User::where('email', $email)->first() == NULL) {

				$referrer = User::find($referred_by_id);
				$this->line($email . " referred by " . $referrer->email);

				$user                = new User;
				$user->email         = $email;
				$user->password      = $password;
				$user->name          = $name;
				$user->referred_by   = $referred_by_id;
				$user->tracking_code = $tracking_code;
				$user->save();

			}
		}
	}
}
