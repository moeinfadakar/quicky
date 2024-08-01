<?php

namespace App\Http\Controllers;

use App\Models\accepted_trips;
use App\Models\city;
use App\Models\cars;
use App\Models\Trips;
use App\Models\users;
use App\Models\work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Metadata\Uses;

class userController extends Controller
{
    


    function SignUpForUsers(){


      $allCars = cars::all();
      $allCities = city::all();

        return view('client.SignUpForUsers',  [
    "allCars" => $allCars ,
    "allCities" => $allCities ,
        ]);  
      }
  

      
  



    function signInUsers(){
  
  
  
      return view('client.signInUsers');
    }
    

///////////////////////////////

function signUpUserPost(request $request  ){

      $this->validate($request , [
          'Fullname' => 'required' ,
          'Username'=> 'required | unique:users' ,
          'Email' => 'required| unique:users' ,
          'Number'=> 'required|numeric|min:8' ,
          'Password' => 'required|min:8' ,
          'passwords' => 'required | same:Password' ,
          'city' => 'required',
          'IDcardnumber' => 'required' ,
          'age'=> 'required' ,
          'gender' => 'required' ,
      ]);

       $newUser = new users();
       $newUser->full_name = $request['Fullname'];
       $newUser->username= $request['Username'];
       $newUser->email= $request['Email'];
       $newUser->city_id= $request['city'];
       $newUser->age= $request['age'];
       $newUser->gender= $request['gender'];
       $newUser->IDcardnumber= $request['IDcardnumber'];
       $newUser->number= $request['Number'];
       $newUser->password	= bcrypt($request['Password']); 
       $newUser->roll = 0 ;
        $newUser->save();

        if($newUser){
        return redirect('/');
        }
}

function userSignInpost(request $request ){
    

if(Auth::attempt([ "username" => $request["NAME"]  , "password" =>  $request["password"]  , "roll" =>"0"  ] , $request["remember"]    )){

  if (isset($request["remember"]) && ! empty($request["remember"]) ){

    setcookie('NAME' , $request["NAME"] , time() + 60 *60 * 24 * 30 );
    setcookie('password' , $request["password"] , time() + 60 *60 * 24 * 30 );

}else{

setcookie('NAME' , '' );
setcookie('password' , '' );

}

$massage = "welcome" ;
return redirect('/SendRequestUser')->with([
"massage" => $massage ,
]);


}else  if(Auth::attempt([ "email" => $request["NAME"]  , "password" =>  $request["password"]  ,"roll" =>"0"  ] , $request["remember"]     )){

  if (isset($request["remember"]) && ! empty($request["remember"]) ){

    setcookie('NAME' , $request["NAME"] , time() + 60 *60 * 24 * 30 );
    setcookie('password' , $request["password"] , time() + 60 *60 * 24 * 30 );

}else{

setcookie('NAME' , '' );
setcookie('password' , '' );

}

$massage = "welcome" ;
return redirect('/SendRequestUser')->with([
"massage" => $massage ,
]);


}else  if(Auth::attempt([ "number" => $request["NAME"]  , "password" =>  $request["password"] ,"roll" =>"0"    ] , $request["remember"]    )){

  if (isset($request["remember"]) && ! empty($request["remember"]) ){

    setcookie('NAME' , $request["NAME"] , time() + 60 *60 * 24 * 30 );
    setcookie('password' , $request["password"] , time() + 60 *60 * 24 * 30 );

}else{

setcookie('NAME' , '' );
setcookie('password' , '' );

}

$massage = "welcome" ;
return redirect('/SendRequestUser')->with([
"massage" => $massage ,
]);



}else{

return redirect('/signInUsers');

}



 








}



     







  

     
  
   
    function SendRequestUser(){

      $allRequest = Trips::all();
      $DriversAvalibleForWork = work::all();
      return view('client.tripUsers', [

"DriversAvalibleForWork" => $DriversAvalibleForWork ,

      ]  );

    }
    function logOutUser(){

      Auth::logout();
       
      return Redirect('/');

    }

    function sendNewReqestPost(request $request){

         $newTripRequest = new Trips();
         $newTripRequest->start = $request["start"];
         $newTripRequest->end = $request["end"];
         $newTripRequest->price = $request["price"];
         $newTripRequest->save();
 
         return redirect('/SendRequestUser');
    }















  }