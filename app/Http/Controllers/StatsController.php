<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StatsController extends Controller
{
    public function getStats(Request $request){
        $client = new \GuzzleHttp\Client();
        $response = $client->get("https://api.xmrpool.net/miner/48WCGXaoL7gUY8fwSxUPgR4VYx4iVTJYEF4jP7Uq4jG26Hz9Gc6QjgU1m7Hht5pBPJbccCyR4khkZD88wSwErkRt2FkmpNH/stats/allWorkers",[]);
        dump(json_decode($response->getBody(), true));
    }
}
