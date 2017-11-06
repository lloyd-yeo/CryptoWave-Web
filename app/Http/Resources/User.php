<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Log;

class User extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
//    	dump($this->wallets);
	    return [
		    'id' => $this->id,
		    'name' => $this->name,
		    'email' => $this->email,
		    'wallets' => UserWallet::collection($this->wallets),
	    ];
    }
}
