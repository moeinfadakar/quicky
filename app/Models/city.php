<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class city extends Model
{
    use HasFactory;

    protected $fillable = [      '*'     ];  

public function accepted_trip(){

    return $this->hasMany(accepted_trips::class);

}
public function car(){

    return $this->hasMany(cars::class);

}
public function driver(){

    return $this->hasMany(drivers::class);

}
public function trip(){

    return $this->hasMany(Trips::class);

}
public function user(){

    return $this->hasMany(User::class);

}



}
