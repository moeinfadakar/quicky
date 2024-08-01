<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url("css/bootstrap.css") }} ">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">							
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">			
    <link rel="stylesheet" href="{{ url("css/main.css") }} ">
    <link rel="stylesheet" href="{{ url("/fontawsome/all.js") }}">
    <title>CARS</title>
</head>
<body>
    <div class="container-fluid ">
      <h2 class=" text-center" >CARS</h2>
        <div class="row">
            <div class="col-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item  bg-success ">  <a href="{{ url("/addCar") }}" class="     -pill  text-white"  >Add Somthing <i class=" fa fa-plus " style="width:10rem !important;"></i></a></li>
                    <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("/adminCityGet")}}">City <i class="fa fa-city"></i> </a></li>
                    <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("/adminDriverGet")}}">Drivers  <i class=" fa fa-drivers-license"></i> </a></li>
                    <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("/adminTripGet")}}">Trip <i  class=" fa fa-location"></i> </a></li>
                    <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("/adminUserGet")}}">Users <i class=" fa fa-user"></i> </a></li>
                    <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("/adminVerifiedTripsGet")}}">VerfiedTrips <i class="fa fa-location-check"></i> </a></li>
                    <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("")}}">Add Admin <i class="fa fa-user-plus"></i> </a></li>
                    <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("")}}">Exit <i class=" fa fa-power-off"></i></a></li>
                  </ul>
            </div>
            <div class="col-9">

                <table class="table  text-dark ">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Car name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($allCar as $car)
                                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->name }}</td>
                        <td><a class=" btn btn-warning" href="{{ url("/EditCar/".$car->id ) }}">Edit</a></td>
                        <td><a class=" btn btn-danger" href="{{ url("/deleteCars/".$car->id ) }}">Delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>


            </div>
        </div>
    </div>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ url("/js/vendor/bootstrap.min.js") }} "></script>			
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="js/easing.min.js"></script>			
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>	
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>	
     <script src="js/jquery-ui.js"></script>								
    <script src="js/jquery.nice-select.min.js"></script>							
    <script src="js/mail-script.js"></script>	
    <script src="js/main.js"></script>	
    <script src="{{ url("/fontawsome/all.js") }}"></script>	
</body>
</html>