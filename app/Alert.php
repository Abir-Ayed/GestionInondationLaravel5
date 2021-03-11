<?php

namespace Alert;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model 
{

    protected $table = 'Alerts';
    public $timestamps = false;

    public function alert()
    {
        return $this->belongsTo('Users');
    }

}