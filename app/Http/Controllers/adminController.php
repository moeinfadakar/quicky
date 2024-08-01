<?php

namespace App\Http\Controllers;

use App\Models\accepted_trips;
use App\Models\cars;
use App\Models\city;
use App\Models\drivers;
use App\Models\Trips;
use App\Models\users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class adminController extends Controller
{
    // 
     function index(){

        return view("admin.adminSignIn");
     }
     function enterAdminPost(request  $request){
           
                      $this->validate($request , [

                           "username" => 'required',
                           'password' => 'required' ,

                      ]);

                  if(Auth::attempt(['username' => $request["username"]]  )){


                     $allCar = cars::all();
                    return redirect('admin.carTypeAdmin')->with([
                         "allCar" =>$allCar ,
                    ]);


                  }else{

                    return redirect("admin.adminSignIn");

                  }



          
     }

       function adminCityGet(){
          $allCities = city::all();   

          return view('admin.cityAdmin')->with([
           "allCities"=>$allCities ,
          ]);
     }
       function adminGetCars(){
          $allCar = cars::all();   

          return view('admin.carTypeAdmin')->with([
           "allCar"=>$allCar ,
          ]);
       }
       function adminDriverGet(){
             
            $allDriver = drivers::all();

        return  view('admin.driverAdmin')->with([
     "allDriver"=> $allDriver ,
   ]);
       }
       function adminTripGet(){

               $allTrips = Trips::all();
            return view('admin.tripAdmin')->with([
               "allTrips"=> $allTrips ,
             ]);

       }
       function adminUserGet(){
           
          $allUser = User::all();
         return view('admin.userAdmin')->with([
          "allUser"=> $allUser ,
        ]);

       }
       function adminVerifiedTripsGet(){
 
             $allVerifiedTrips = accepted_trips::all();
          return view('admin.verifiedTripsAdmin')->with([
               "allVerifiedTrips"=> $allVerifiedTrips ,
             ]);
       }

function LogOutAdmin(){

      Auth::logout();


     return  redirect()->to('/');


}

function EditCity($id){

$City = city::all()->where('id' , '=' , $id);

return view('admin.editCity')->with([
"City"=> $City ,
]);



}



function EditCarsPost(request $request){

 $findCar = cars::find($request["id"]);

if($findCar){

  $findCar->name = $request["name"] ;
  $findCar->update();

  return redirect()->to('/adminGetCars');
}else{


  return redirect()->to('/EditCar/'. $request["id"] );
}




}

function EditCar($id){

  $findSpecificCar = cars::all()->where('id', '=' ,$id);

return view('admin.editCar')->with([
"findSpecificCar" => $findSpecificCar ,

]);
}


function deleteCars($id){

  $findCar = cars::find($id);

  if($findCar){

    $findCar->delete();
    return redirect()->to('/adminGetCars'); 

  }else{

    return redirect()->to('/adminGetCars'); 

  }


}

function deleteCity($id){

$findCity =city::find($id);

if($findCity){
    
  $findCity->delete();
    return redirect('/adminCityGet');

}else{
  return redirect('/adminCityGet');
}


}

function EditCityPost(request $request){

 $findThisCIty = city::find($request["id"]);

 if ($findThisCIty){

$findThisCIty->name = $request["name"];
$findThisCIty->update();

return redirect('/adminCityGet');

 }else{

  return redirect("/EditCity/".$request["id"]);
 }
}


function deleteDriver($id){

    $findDriver = drivers::find($id);

    if($findDriver){
        
      $findDriver->delete();
        return redirect()->to('/adminDriverGet');

    }else{
 
      return redirect()->to('/adminDriverGet');

    }

}


function deleteUser($id){

$findUser = users::find($id);
if($findUser){

     $findUser->delete();
return redirect()->to('/adminUserGet');

}else{

  return redirect()->to('/adminUserGet');
}


}


function addCity(){


  return view('admin.addCityAdmin');
}

function addCar(){


  return view('admin.addCarAdmin');
}

function addCarPost(request $request ){

$insertAnewCar = new cars();
$insertAnewCar->name = $request["name"];
$insertAnewCar->save();

return redirect('/adminGetCars');
}

function addCityPost(request $request){

$addNewCity = new city();
$addNewCity->name = $request["name"];
$addNewCity->save();
return redirect('/adminCityGet');
}



}