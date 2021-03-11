<?php

namespace Observation;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model 
{

    protected $table = 'Observations';
    public $timestamps = false;

    public function observation()
    {
        return $this->belongsToMany('Users');
    }

    public function observation()
    {
        return $this->hasMany('Photo');
    }

}