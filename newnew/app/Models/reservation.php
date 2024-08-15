<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable =['vehicle_id',
                          'name_passenger',
                          'phone',
                          'numseat'
                        ];
      protected $hidden = ['created_at','updated_at'];

}
