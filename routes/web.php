<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\driverController;
use App\Http\Controllers\userController;
use App\Http\Requests\signInDriver;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Driver\Driver;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// general Route`s :
Route::get( "/" , [Controller::class , "home"]);
Route::get('/About-us' , [Controller::class , "AboutUs"]);
Route::get('/gallery' , [Controller::class , "gallery"]);

// driver 
Route::get('/SignInForDrivers' , [driverController::class , "SignInForDrivers"]);
route::get("/signUpForDrivers" , [driverController::class , "signUpForDrivers"]);
Route::post('/driverSignUp-Post'  , [driverController::class , "driversiguppostpost"]);
Route::post('/signinDriver-post' , [driverController::class , 'signinDriverpost']);
Route::get("/seeProfileDriver" , [driverController::class , "seeProfileDriver"])->middleware("auth");


// user 
Route::get('/SignupForUsers' , [userController::class , "SignupForUsers"]);
Route::post("/UserSignup-Post" , [userController::class , "signUpUserPost" ]);
Route::get('/signInUsers', [userController::class, 'signInUsers']);
Route::post('/userSignIn-post' , [userController::class , 'userSignInpost']);

// user send request
Route::get('/SendRequestUser' , [userController::class , "SendRequestUser"] )->middleware("auth");
Route::get('/logOutUser' , [userController::class , "logOutUser"])->middleware("auth");
Route::post("/readyForWork" , [driverController::class  , "readyForWorkPost"])->middleware("auth");
Route::post("/sendNewReqestPost" , [userController::class , "sendNewReqestPost"])->middleware("auth");
Route::post("/acceptedRequestPost" , [driverController::class , "acceptedRequestPost"])->middleware("auth");

// driver get request
Route::get('/driversTripMap' , [driverController::class , "driversTripMap"])->middleware("auth");
Route::get('/logOutDriver' , [driverController::class , "logOutDriver"])->middleware("auth");


// admin Route`s 
Route::get('/shwy54fd829sl482kdiwjS' , [adminController::class  , "index"]);
Route::get('/adminGetCars' , [adminController::class  , "adminGetCars"])->middleware("auth");
Route::get('/adminCityGet' , [adminController::class  , "adminCityGet"])->middleware("auth");
Route::get('/adminDriverGet' , [adminController::class  , "adminDriverGet"])->middleware("auth");
Route::get('/adminTripGet' , [adminController::class  , "adminTripGet"])->middleware("auth");
Route::get('/adminUserGet' , [adminController::class  , "adminUserGet"])->middleware("auth");
Route::get('/adminVerifiedTripsGet' , [adminController::class  , "adminVerifiedTripsGet"])->middleware("auth");
// Route::get("/enterAdminPost" . [adminController::class , "enterAdminPost"]);
// Route::get('/LogOutAdmin' , [adminController::class , "LogOutAdmin"]);


// admins Delete Route
Route::get('/deleteCity/{id}' , [adminController::class , "deleteCity"])->middleware("auth");
Route::get('/deleteCars/{id}' , [adminController::class , "deleteCars"])->middleware("auth");
Route::get('/deleteDriver/{id}' , [adminController::class , "deleteDriver"])->middleware("auth");
Route::get('/deleteUser/{id}' , [adminController::class , "deleteUser"])->middleware("auth");


// admins edit Route
Route::post('/EditCityPost' , [adminController::class , "EditCityPost"])->middleware("auth");
Route::post('/EditCarsPost' , [adminController::class , "EditCarsPost"])->middleware("auth");
//   USER AND DRIVERS RIGHT DOS`NT LET ADMIN TO CHANGE THERE INFORMATION ;

route::get('/EditCity/{id}' , [adminController::class , "EditCity"])->middleware("auth");
route::get('/EditCar/{id}' , [adminController::class , "EditCar"])->middleware("auth");

// admin add rights
Route::get('/addCity' , [adminController::class , "addCity"])->middleware("auth");
Route::get('/addCar' , [adminController::class , "addCar"])->middleware("auth");
Route::post('/addCityPost' , [adminController::class , "addCityPost"])->middleware("auth");
Route::post('/addCarPost' , [adminController::class , "addCarPost"])->middleware("auth");



