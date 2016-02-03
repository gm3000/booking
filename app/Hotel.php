<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function City()
    {
        return $this->belongsTo('App\City');
    }
}
