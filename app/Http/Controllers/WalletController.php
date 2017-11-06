<?php

namespace App\Http\Controllers;

use App\UserWallet;
use Illuminate\Http\Request;
use App\Http\Resources\UserWallet as UserWalletResource;

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
}
