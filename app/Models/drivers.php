<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class drivers extends Authenticatable
{
    use Notifiable;
  
    protected $guard = 'driver';
    protected $fillable = [ 'name', 'email', 'password', ];
    protected $hidden = [ 'password', 'remember_token', ];

    public function accepted_trip(){

        return $this->hasMany(accepted_trips::class);
    
    }
    public function car(){

        return $this->belongsTo(cars::class);
    
    }
    public function city(){

        return $this->belongsTo(city::class);
    
    }
    public function trip(){

        return $this->hasMany(Trips::class);
    
    }



}
