<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Models\SleepingOwlModel;

class Object extends SleepingOwlModel
{
    protected $guarded = [];

    function type() {
    	return $this->belongsTo(\App\ObjectType::class);
    }
}
