<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
     protected $fillable = ['id','name_driver','vehicle_id','vehicle_type','destination_city' , 'max_seats','number_reserv_seat'];
    protected $hidden = ['created_at','updated_at'];

    public function driver(){
        return $this->belongsTo('App\Models\Driver','driver_id','id');
    }
    
    }
