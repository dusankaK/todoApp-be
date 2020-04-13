<?php

namespace App;

use User;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
