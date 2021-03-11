<?php

namespace Region;

use Illuminate\Database\Eloquent\Model;

class Region extends Model 
{

    protected $table = 'Regions';
    public $timestamps = false;

    public function region()
    {
        return $this->belongsToMany('Users');
    }

    public function region()
    {
        return $this->hasOne('Prevision');
    }

    public function region()
    {
        return $this->hasMany('Barrage');
    }

    public function region()
    {
        return $this->hasOne('Pluviometrie');
    }

}