<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
