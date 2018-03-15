<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use App\UserHashpowerRecord;
use App\User;
use App\SystemParameter;
use Carbon\Carbon;

class PollStatsFromXmrPool extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'poll:stats';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Poll Stats from XmrPool';

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
				$sys_param = SystemParameter::first();
		        $sys_param->total_hashes = $stat["totalHash"];
		        $sys_param->save();
		        continue;
	        }

            $user = User::where('email', $email)->first();
            if ($user !== NULL) {
                $user_hash_power = UserHashpowerRecord::where('email', $email)->first();

                if ($user_hash_power === NULL) {
                    $user_hash_power = new UserHashpowerRecord;
                    $user_hash_power->email = $stat["identifer"];
                    $user_hash_power->hash_speed = $stat["hash"];
                    $user_hash_power->hash = $stat["totalHash"];
                    $user_hash_power->hash_1_date = Carbon::now();
                    $user_hash_power->save();
                } else {

	                $total_hash = $stat["totalHash"];
	                $total_hash = $total_hash + $user_hash_power->xmr_pool_hashrecord;
	                
                    if ($user_hash_power->hash_pos > 12) {
                        $user_hash_power->hash = $user_hash_power->hash_2;
                        $user_hash_power->hash_1_date =  $user_hash_power->hash_2_date;

                        $user_hash_power->hash_2 = $user_hash_power->hash_3;
                        $user_hash_power->hash_2_date =  $user_hash_power->hash_3_date;

                        $user_hash_power->hash_3 = $user_hash_power->hash_4;
                        $user_hash_power->hash_3_date =  $user_hash_power->hash_4_date;

                        $user_hash_power->hash_4 = $user_hash_power->hash_5;
                        $user_hash_power->hash_4_date =  $user_hash_power->hash_5_date;

                        $user_hash_power->hash_5 = $user_hash_power->hash_6;
                        $user_hash_power->hash_5_date =  $user_hash_power->hash_6_date;

                        $user_hash_power->hash_6 = $user_hash_power->hash_7;
                        $user_hash_power->hash_6_date =  $user_hash_power->hash_7_date;

                        $user_hash_power->hash_7 = $user_hash_power->hash_8;
                        $user_hash_power->hash_7_date =  $user_hash_power->hash_8_date;

                        $user_hash_power->hash_8 = $user_hash_power->hash_9;
                        $user_hash_power->hash_8_date =  $user_hash_power->hash_9_date;

                        $user_hash_power->hash_9 = $user_hash_power->hash_10;
                        $user_hash_power->hash_9_date =  $user_hash_power->hash_10_date;

                        $user_hash_power->hash_10 = $user_hash_power->hash_11;
                        $user_hash_power->hash_10_date =  $user_hash_power->hash_11_date;

                        $user_hash_power->hash_11 = $user_hash_power->hash_12;
                        $user_hash_power->hash_11_date =  $user_hash_power->hash_12_date;

                        $user_hash_power->hash_12 = $total_hash;
                        $user_hash_power->hash_12_date =  Carbon::now();


                    } else {
                        switch ($user_hash_power->hash_pos) {

                            case 1:
                                $user_hash_power->hash = $total_hash;
                                $user_hash_power->hash_1_date = Carbon::now();
                                break;

                            case 2:
                                $user_hash_power->hash_2 = $total_hash;
                                $user_hash_power->hash_2_date = Carbon::now();
                                break;

                            case 3:
                                $user_hash_power->hash_3 = $total_hash;
                                $user_hash_power->hash_3_date = Carbon::now();
                                break;

                            case 4:
                                $user_hash_power->hash_4 = $total_hash;
                                $user_hash_power->hash_4_date = Carbon::now();
                                break;

                            case 5:
                                $user_hash_power->hash_5 = $total_hash;
                                $user_hash_power->hash_5_date = Carbon::now();
                                break;

                            case 6:
                                $user_hash_power->hash_6 = $total_hash;
                                $user_hash_power->hash_6_date = Carbon::now();
                                break;

                            case 7:
                                $user_hash_power->hash_7 = $total_hash;
                                $user_hash_power->hash_7_date = Carbon::now();
                                break;

                            case 8:
                                $user_hash_power->hash_8 = $total_hash;
                                $user_hash_power->hash_8_date = Carbon::now();
                                break;

                            case 9:
                                $user_hash_power->hash_9 = $total_hash;
                                $user_hash_power->hash_9_date = Carbon::now();

                                break;

                            case 10:
                                $user_hash_power->hash_10 = $total_hash;
                                $user_hash_power->hash_10_date = Carbon::now();
                                break;

                            case 11:
                                $user_hash_power->hash_11 = $total_hash;
                                $user_hash_power->hash_11_date = Carbon::now();
                                break;

                            case 12:
                                $user_hash_power->hash_12 = $total_hash;
                                $user_hash_power->hash_12_date = Carbon::now();
                                break;

                            default:
                                $user_hash_power->hash = $total_hash;
                                $user_hash_power->hash_pos = 1;
                                $user_hash_power->hash_1_date = Carbon::now();

                                break;
                        }
                        $user_hash_power->hash_pos = $user_hash_power->hash_pos + 1;
                    }

                    $user_hash_power->hash_speed = $stat["hash"];
                    $user_hash_power->save();
                }
            }

        }
    }
}