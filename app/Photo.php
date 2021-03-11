<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model 
{

    protected $table = 'Photos';
    public $timestamps = false;

    public function photo()
    {
        return $this->belongsTo('Observation');
    }

}