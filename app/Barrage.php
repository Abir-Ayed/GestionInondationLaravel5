<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barrage extends Model 
{

    protected $table = 'Barrages';
    public $timestamps = true;


    public function barrage()
    {
        return $this->belongsTo('Region');
    }

}