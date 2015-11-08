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

    function parent_object() {
    	return $this->belongsTo(\App\Object::class);
    }

    static function getList() {
    	return static::lists('name', 'id')->all();
    }
}
