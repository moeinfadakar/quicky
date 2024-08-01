<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    use HasFactory;

public function accepted_trip (){

    return $this->hasMany(accepted_trips::class);
}
public function city (){

    return $this->hasMany(city::class);
}
public function driver (){

    return $this->belongsTo(drivers::class);
}
public function trip (){

    return $this->hasMany(Trips::class);
}








}
