<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Models\SleepingOwlModel;

class Category extends SleepingOwlModel
{
    protected $guarded = [];

    function classification() {
    	return $this->belongsTo(\App\Classification::class);
    }

    static function getList() {
    	return static::lists('name', 'id')->all();
    }
}
