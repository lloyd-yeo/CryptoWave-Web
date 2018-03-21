<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserHashpowerRecord;
use App\User;

class StatsController extends Controller
{
    public function getStats(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get("http://127.0.0.1:8000/stats", []);
//        dump(json_decode($response->getBody(), true));
        return($response->getBody());

        $stats = json_decode($response->getBody(), true);
        foreach ($stats as $email => $stat) {
            $user = User::where('email', $email)->first();
            if ($user !== NULL) {

                $user_hash_power = UserHashpowerRecord::where('email', $email)->first();
                if ($user_hash_power === NULL) {
                    $user_hash_power = new UserHashpowerRecord;
                    $user_hash_power->email = $stat["identifer"];
                    $user_hash_power->hash_speed = $stat["hash"];
                    $user_hash_power->hash = $stat["totalHash"];
                    $user_hash_power->save();
                } else {
                    if ($user_hash_power->hash_pos > 12) {
                        $user_hash_power->hash = $user_hash_power->hash_2;

                        $user_hash_power->hash_2 = $user_hash_power->hash_3;

                        $user_hash_power->hash_3 = $user_hash_power->hash_4;

                        $user_hash_power->hash_4 = $user_hash_power->hash_5;

                        $user_hash_power->hash_5 = $user_hash_power->hash_6;

                        $user_hash_power->hash_6 = $user_hash_power->hash_7;

                        $user_hash_power->hash_7 = $user_hash_power->hash_8;

                        $user_hash_power->hash_8 = $user_hash_power->hash_9;
                        $user_hash_power->hash_9 = $user_hash_power->hash_10;
                        $user_hash_power->hash_10 = $user_hash_power->hash_11;
                        $user_hash_power->hash_11 = $user_hash_power->hash_12;
                        $user_hash_power->hash_12 = $stat["totalHash"];


                    } else {
                        switch ($user_hash_power->hash_pos) {

                            case 1:
                                $user_hash_power->hash = $stat["totalHash"];
                                break;

                            case 2:
                                $user_hash_power->hash_2 = $stat["totalHash"];
                                break;

                            case 3:
                                $user_hash_power->hash_3 = $stat["totalHash"];
                                break;

                            case 4:
                                $user_hash_power->hash_4 = $stat["totalHash"];
                                break;

                            case 5:
                                $user_hash_power->hash_5 = $stat["totalHash"];
                                break;

                            case 6:
                                $user_hash_power->hash_6 = $stat["totalHash"];
                                break;

                            case 7:
                                $user_hash_power->hash_7 = $stat["totalHash"];
                                break;

                            case 8:
                                $user_hash_power->hash_8 = $stat["totalHash"];
                                break;

                            case 9:
                                $user_hash_power->hash_9 = $stat["totalHash"];

                                break;

                            case 10:
                                $user_hash_power->hash_10 = $stat["totalHash"];
                                break;

                            case 11:
                                $user_hash_power->hash_11 = $stat["totalHash"];
                                break;

                            case 12:
                                $user_hash_power->hash_12 = $stat["totalHash"];
                                break;

                            default:
                                $user_hash_power->hash = $stat["totalHash"];
                                $user_hash_power->hash_pos = 1;

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
