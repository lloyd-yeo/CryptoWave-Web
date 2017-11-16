<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UserWallet extends Resource
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
		    'coin_type' => $this->coin_type,
		    'amount' => $this->amount,
	    ];
    }
}
