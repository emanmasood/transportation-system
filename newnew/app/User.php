<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['id','name', 'email', 'password','mobile'];
    protected $hidden = ['password', 'remember_token','created_at','updated_at'];

    public function reservations(){
        return $this->hasMany('App\Model\Reservation','user_id','id');
    }
}


