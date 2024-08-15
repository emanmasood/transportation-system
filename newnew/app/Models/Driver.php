<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Driver extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['id','name', 'email', 'password','mobile'];
    protected $hidden = ['password', 'remember_token','created_at','updated_at'];

    public function vehicle(){
        return $this->hasOne('App\Models\Vehicle','driver_id','id');
    }
    public function reservations(){
        return $this->hasMany('App\Models\Reservation','driver_id','id');
    }

}
