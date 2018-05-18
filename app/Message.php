<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function status()
    {
    	return $this->hasOne(Status::class);
    }
}
