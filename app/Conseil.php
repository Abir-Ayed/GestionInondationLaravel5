<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conseil extends Model 
{

    protected $table = 'Conseils';
    protected $primaryKey = 'id_conseil';
    public $timestamps = false;

    public function conseil()
    {
        return $this->belongsTo('Users');
    }

}