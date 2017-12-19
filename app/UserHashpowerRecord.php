<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHashpowerRecord extends Model
{
    public function user()
    {
      return $this->belongsTo('App/User');
    }
}
