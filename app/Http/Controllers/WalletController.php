<?php

namespace App\Http\Controllers;

use App\UserWallet;
use Illuminate\Http\Request;
use App\Http\Resources\UserWallet as UserWalletResource;
use App\Http\Resources\UserWallets as UserWalletsResource;

class WalletController extends Controller
{
    public function addAmount(Request $request) {
    	$wallet_id = $request->input('id');
		$amount = $request->input('amount');
		$wallet = UserWallet::find($wallet_id);

		if ($wallet !== NULL) {
			$wallet->amount = $wallet->amount + $amount;
			$wallet->save();
		}

		return new UserWalletResource($wallet);
    }

	public function addAmountBatch(Request $request) {

    	$unpaid_entries = $request->input("unpaid");

    	$confirmed_entries = collect();

    	foreach ($unpaid_entries as $unpaid_entry) {
    		$wallet_ids = array_keys($unpaid_entry);
    		$wallet_id = $wallet_ids[0];
		    $amount = $unpaid_entry[$wallet_id];

		    $wallet = UserWallet::find($wallet_id);

		    if ($wallet !== NULL) {
			    $wallet->amount = $wallet->amount + $amount;
			    $wallet->save();

			    $confirmed_entries->push($wallet);
		    }
	    }

	    return new UserWalletsResource($confirmed_entries);
	}
}
