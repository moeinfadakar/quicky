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
    <title>USER</title>
</head>
<body>
    <div class="container-fluid">
      <h2 class="text-center">USERS</h2>
        <div class="row">
            <div class="col-3">
              <ul class="list-group list-group-flush">
                <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("/adminGetCars")}}">Car <i class="fa fa-city"></i> </a></li>
                <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("/adminDriverGet")}}">Drivers  <i class=" fa fa-drivers-license"></i> </a></li>
                <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("/adminTripGet")}}">Trip <i  class=" fa fa-location"></i> </a></li>
                <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("/adminCityGet")}}">City  <i class=" fa fa-drivers-license"></i> </a></li>
                <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("/adminVerifiedTripsGet")}}">VerfiedTrips <i class="fa fa-location-check"></i> </a></li>
                <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("")}}">Add Admin <i class="fa fa-user-plus"></i> </a></li>
                <li class="list-group-item  bg-dark "><a class=" text-center text-warning" href="{{ url("")}}">Exit <i class=" fa fa-power-off"></i></a></li>
              </ul>
            </div>
            <div class="col-9">


                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">Email</th>
                        <th scope="col">age</th>
                        <th scope="col">gender</th>
                        <th scope="col">number</th>
                        <th scope="col">Id number</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($allUser as $user)
                             <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->full_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->age }}</td>
                        @if($user->gender === 1)
                                  <td>men</td>
                                  @else
                                  <td>women</td>
                        @endif
                        <td>{{ $user->number }}</td>
                        <td>{{ $user->IDcardnumber }}</td>
                        <td><a href="{{ url("/deleteUser/".$user->id  )}}" class=" btn btn-danger ">Delete</a></td>
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