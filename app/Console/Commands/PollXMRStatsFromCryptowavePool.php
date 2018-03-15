<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use App\UserHashpowerRecord;
use App\User;
use App\SystemParameter;
use Carbon\Carbon;

class PollXMRStatsFromCryptowavePool extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'poll:statsold';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Poll Stats from Old CryptoWave Pool';

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
        $client = new \GuzzleHttp\Client();
//        $response = $client->get("https://api.xmrpool.net/miner/48WCGXaoL7gUY8fwSxUPgR4VYx4iVTJYEF4jP7Uq4jG26Hz9Gc6QjgU1m7Hht5pBPJbccCyR4khkZD88wSwErkRt2FkmpNH/stats/allWorkers", []);
        $response = $client->get("http://159.89.197.169:8001/miner/48WCGXaoL7gUY8fwSxUPgR4VYx4iVTJYEF4jP7Uq4jG26Hz9Gc6QjgU1m7Hht5pBPJbccCyR4khkZD88wSwErkRt2FkmpNH/stats/allWorkers", []);

        $all_users = User::all();
        foreach ($all_users as $user) {
            $user_hash_power = UserHashpowerRecord::where('email', $user->email)->first();
            if ($user_hash_power === NULL) {
                $user_hash_power = new UserHashpowerRecord;
                $user_hash_power->email = $user->email;
                $user_hash_power->hash_speed = 0;
                $user_hash_power->hash = 0;
                $user_hash_power->hash_1_date = Carbon::now();
                $user_hash_power->save();
            }
        }

        $stats = json_decode($response->getBody(), true);

        dump($stats);

        foreach ($stats as $email => $stat) {

            if ($email == "global") {
                continue;
            }

            $user = User::where('email', $email)->first();

            if ($user !== NULL) {
                $user_hash_power = UserHashpowerRecord::where('email', $email)->first();

                if ($user_hash_power == NULL) {
                    $user_hash_power = new UserHashpowerRecord;
                    $user_hash_power->email = $stat["identifer"];
                    $user_hash_power->hash_speed = 0;
                    $user_hash_power->hash = 0;
                    $user_hash_power->hash_1_date = Carbon::now();
                    $user_hash_power->save();
                }

                $user_hash_power->cryptowave_pool_hashrecord = $stat["totalHash"];
                if ($user_hash_power->save()) {
                    $this->line("Updated hash record for user: " . $stat["identifer"]);
                }
            } else {
                $this->line("User not found: " . $stat["identifer"]);
            }
        }
    }
}