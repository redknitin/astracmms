<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Models\SleepingOwlModel;

class Part extends SleepingOwlModel
{
    protected $guarded = [];

    function classification() {
    	return $this->belongsTo(\App\Classification::class);
    }

    function category() {
    	return $this->belongsTo(\App\Category::class);
    }

    function organization() {
    	return $this->belongsTo(\App\Organization::class);
    }

    function uom() {
    	return $this->belongsTo(\App\Uom::class);
    }
}
