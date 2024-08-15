<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['id', 'name', 'email', 'password',];
    protected $hidden = ['password', 'remember_token', 'created_at', 'updated_at'];
}
