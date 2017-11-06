<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\UserWallet as UserWallet;

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
	    return [
		    'id' => $this->id,
		    'name' => $this->name,
		    'email' => $this->email,
		    'wallets' => UserWallet::collection($this->wallets),
	    ];
    }
}
