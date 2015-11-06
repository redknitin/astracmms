<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Models\SleepingOwlModel;

class WorkOrder extends SleepingOwlModel
{
    protected $guarded = [];

    function object() {
    	return $this->belongsTo(\App\Object::class);
    }

    function job_type() {
    	return $this->belongsTo(\App\JobType::class);
    }
}
