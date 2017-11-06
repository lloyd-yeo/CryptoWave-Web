<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserWallet extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
	    return [
		    'id' => $this->id,
		    'password' => $this->password,
		    'coin_type' => $this->coin_type,
		    'amount' => $this->amount,
	    ];
    }
}
