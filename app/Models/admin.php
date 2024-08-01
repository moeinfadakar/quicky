<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class admin extends Authenticatable
{
    use Notifiable;   
    
    protected $guard = 'admin';
    protected $fillable = [ 'name', 'email', 'password', ];
    protected $hidden = [ 'password', 'remember_token', ];

}
