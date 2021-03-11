<?php

namespace Prevision;

use Illuminate\Database\Eloquent\Model;

class Prevision extends Model 
{

    protected $table = 'Previsions';
    public $timestamps = false;

    public function prevision()
    {
        return $this->belongsTo('Region');
    }

}