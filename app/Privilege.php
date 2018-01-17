<?php

namespace WebPa;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    public function user() {
        return $this->belongsTo('WebPa\User');
    }  
}
