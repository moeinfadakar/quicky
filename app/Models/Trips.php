<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    use HasFactory;

    public function car(){

        return $this->belongsTo(cars::class);
    
    }
    public function city(){

        return $this->belongsTo(city::class);
    
    }
    public function driver(){

        return $this->belongsTo(drivers::class);
    
    }
    public function user(){

        return $this->belongsTo(users::class);
    
    }


}
