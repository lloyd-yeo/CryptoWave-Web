<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendSupportEmail extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'command:name';

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
		$emails = [ 'calvinlooiwy@gmail.com',
		            'dominicsu70@hotmail.com',
		            'ireneguay93@gmail.com',
		            'kevinlee@yours.com',
		            'marbmr75@yahoo.com.sg',
		            'mieketan@gmail.com',
		            'ranirakete39@gmail.com',
		            'zanliu@outlook.com', ];

		


    }
}
