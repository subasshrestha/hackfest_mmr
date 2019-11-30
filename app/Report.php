<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'title', 'description', 'images','user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
//    public function hospitals(){
//        return $this->belongsToMany('App\Hospital');
//    }
}
