<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Models\SleepingOwlModel;

class Organization extends SleepingOwlModel
{
    protected $guarded = [];

    static function getList() {
    	return static::lists('name', 'id')->all();
    }
}
