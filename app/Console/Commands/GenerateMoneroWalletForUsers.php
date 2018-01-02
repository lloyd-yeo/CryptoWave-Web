<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use App\UserWallet;
use Carbon\Carbon;

class GenerateMoneroWalletForUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:xmrwallet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Monero Wallet Facade for users.';

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
	        $wallet_password = $user->email . $user->password . Carbon::now()->toDayDateTimeString();
	        $xmr_wallet = UserWallet::where('user_id', $user->id)
	                                ->where('coin_type', 'Monero')
		                            ->where('id', $wallet_password)
	                                ->first();
	        if ($xmr_wallet == NULL) {
	        	$xmr_wallet = new UserWallet;
		        $xmr_wallet->user_id = $user->id;
		        $xmr_wallet->id = $wallet_password;
		        $xmr_wallet->password = $wallet_password;
		        $xmr_wallet->coin_type = 'Monero';
		        $xmr_wallet->amount = 0;
		        $xmr_wallet->save();
	        }
        }
    }
}
