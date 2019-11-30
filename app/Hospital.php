<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'NMCnum', 'phone', 'hospname','images','user_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
