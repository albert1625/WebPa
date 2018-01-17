<?php

namespace WebPa;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    public function user() {
        return $this->belongsTo('WebPa\User', 'owner_id');
    }
}
