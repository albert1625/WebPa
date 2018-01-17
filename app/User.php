<?php

namespace WebPa;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'privileges',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function isAdmin() {
        return ($this->privileges == 2);
    }

    public function websites() {
        return $this->hasMany('WebPa\Website');
    }  

    public function privilege() {
        return $this->hasOne('WebPa\Privilege');
    }  
}
