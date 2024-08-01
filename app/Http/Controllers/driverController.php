<?php

namespace App\Http\Controllers;

use App\Models\accepted_trips;
use App\Models\cars;
use App\Models\city;
use App\Models\Trips;
use App\Models\users;
use App\Models\work;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;  
use Illuminate\Support\Facades\Validator;  
class driverController extends Controller
{
    //

    function SignInForDrivers(){

        return view('client.signInForDrivers');
    }
    function driversiguppostpost(Request $request  ){

      $this->validate($request ,[
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
            "cartype" =>'required' ,
            "carModel" =>'required' ,
      ] );
              
                
       

             $newِDriver =  new users()  ;
             $newِDriver->full_name = $request["Fullname"];
             $newِDriver->username = $request["Username"];
             $newِDriver->email = $request["Email"];
             $newِDriver->number = $request["Number"];
             $newِDriver->password =  bcrypt($request["Password"]);
             $newِDriver->city_id = $request["city"];
             $newِDriver->IDcardnumber = $request["IDcardnumber"];
             $newِDriver->age = $request["age"];
             $newِDriver->gender = $request["gender"];
             $newِDriver->car_type_id = $request["cartype"];
             $newِDriver->car_year = $request["carModel"];
             $newِDriver->roll = 1;
             $newِDriver->save();
           

             // انتقال به صفحه اصلی  
             return redirect('/');  
           
            
    }

   
   

    function signUpForDrivers(){

        
         $allCars = cars::all();
         $allCities = city::all();

return view("client.signUpForDrivers" , [
    "allCars" => $allCars ,
    "allCities" => $allCities ,
]);
    }

function signinDriverpost(request $request ){

  if(Auth::attempt([ "username" => $request["NAME"]  , "password" =>  $request["password"]  , "roll" => "1"  ] , $request["remember"]    )){

    if (isset($request["remember"]) && ! empty($request["remember"]) ){
  
      setcookie('NAME' , $request["NAME"] , time() + 60 *60 * 24 * 30 );
      setcookie('password' , $request["password"] , time() + 60 *60 * 24 * 30 );
  
  }else{
  
  setcookie('NAME' , '' );
  setcookie('password' , '' );
  
  }
  
  $massage = "welcome" ;
  return redirect('/driversTripMap')->with([
  "massage" => $massage ,
  ]);
  
  
  } else  if(Auth::attempt([ "email" => $request["NAME"]  , "password" =>  $request["password"]  ,"roll" => "1"   ] , $request["remember"]     )){
  
    if (isset($request["remember"]) && ! empty($request["remember"]) ){
  
      setcookie('NAME' , $request["NAME"] , time() + 60 *60 * 24 * 30 );
      setcookie('password' , $request["password"] , time() + 60 *60 * 24 * 30 );
  
  }else{
  
  setcookie('NAME' , '' );
  setcookie('password' , '' );
  
  }
  
  $massage = "welcome" ;
  return redirect('/driversTripMap')->with([
  "massage" => $massage ,
  ]);
  
  
  }else if(Auth::attempt([ "number" => $request["NAME"]  , "password" =>  $request["password"] ,"roll" => "1"    ] , $request["remember"]    )){
  
    if (isset($request["remember"]) && ! empty($request["remember"]) ){
  
      setcookie('NAME' , $request["NAME"] , time() + 60 *60 * 24 * 30 );
      setcookie('password' , $request["password"] , time() + 60 *60 * 24 * 30 );
  
  }else{
  
  setcookie('NAME' , '' );
  setcookie('password' , '' );
  
  }
  
  $massage = "welcome" ;
  return redirect('/driversTripMap')->with([
  "massage" => $massage ,
  ]);
  
  
  
  }else{
return redirect('/SignInForDrivers');


  }





}



 function driversTripMap(){
     
   
$allRequest = Trips::all();

     return view('client.tripDriver')->with([

      "allRequest" => $allRequest ,
     ]);
    
 }


function logOutDriver(){

    Auth::logout();


    return redirect('/');

}



function readyForWorkPost(request $request){

$DriverThatReadyForWork = new work();
$DriverThatReadyForWork->lat = $request["lat"];
$DriverThatReadyForWork->lng = $request["lng"];
$DriverThatReadyForWork->driver_id = $request["ID"];
$DriverThatReadyForWork->save();

return redirect('/SendRequestUser');
}

function acceptedRequestPost(request $request){

$newAcceptedRequest = new accepted_trips();
$newAcceptedRequest->price = $request["price"];
$newAcceptedRequest->trip_id = $request["id"];
$newAcceptedRequest->save();

if ($newAcceptedRequest){

$DeleteAcceptedTrips = Trips::find($request["id"]);
$DeleteAcceptedTrips->delete();


}

return redirect('/driversTripMap');

}


function seeProfileDriver(){

$getProfile = users::where('id' , '=' , Auth::id() );



return view('client.driverProfil')->with([
"getProfile" => $getProfile, 
]);

}



}
