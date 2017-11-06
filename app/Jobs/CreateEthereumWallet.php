<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\User;
use App\UserWallet;
use Carbon\Carbon;

class CreateEthereumWallet implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
	    $wallet_password = $this->user->email . $this->user->password . Carbon::now()->toDayDateTimeString();

	    $file = tmpfile();
	    fwrite($file, $wallet_password);
	    $path = stream_get_meta_data($file)['uri'];
	    $account_id = shell_exec("geth --password " . $path . " account new");

	    preg_match_all('/{(.*?)}/', $account_id, $matches);

	    $wallet_address = $matches[1][0];
		dump($matches[1]);
	    $wallet = new UserWallet;
	    $wallet->id = $wallet_address;
	    $wallet->password = $wallet_password;
	    $wallet->coin_type = "Ethereum";
	    $wallet->amount = 0.0;
	    $wallet->save();
    }
}
