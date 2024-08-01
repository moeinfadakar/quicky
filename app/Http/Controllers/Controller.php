<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\signUpUsers;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    function home(){

      return view('home');
    }
  function AboutUs(){

    return view('about');
  }
     
  function gallery(){

    return view('gallery');
  }
     
  function SignupForDrivers(){

    return view('client.signUpForDrivers');
  }

     
  function SignInForDrivers( ){

    return view('client.SignInForDrivers',[
     
    ]);
  }



 



  }
     





