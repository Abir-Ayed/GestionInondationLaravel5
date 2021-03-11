<?php

namespace Pluviometrie;

use Illuminate\Database\Eloquent\Model;

class Pluviometrie extends Model 
{

    protected $table = 'Pluviometries';
    public $timestamps = false;

    public function pluviometrie()
    {
        return $this->belongsTo('Region');
    }

}