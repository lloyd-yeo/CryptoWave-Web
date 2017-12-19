<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserHashpowerRecord extends Model
{
    public function user()
    {
      return User::where('email',  $this->email)->first();
    }
}
