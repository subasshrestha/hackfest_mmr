<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table="hospital_report";
    protected $fillable = [
        'hospital_id', 'report_id',
    ];
}
