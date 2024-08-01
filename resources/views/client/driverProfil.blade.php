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
      <title>Document</title>
</head>
<body>
      <div class="container">
            @foreach($getProfile as $profile)
            <div class="row">
      <div class="col-6 d-flex justify-content-center align-items-center">{{ $profile->full_name }} </div>
      <div class="col-6 d-flex justify-content-center align-items-center">{{ $profile->email }} </div>
</div>
<div class="row">
      <div class="col-6 d-flex justify-content-center align-items-center">{{ $profile->number }} </div>
      <div class="col-6 d-flex justify-content-center align-items-center  ">{{ $profile->IDcardnumber }} </div>
</div>
<div class="row">
      <div class="col-6 d-flex justify-content-center align-items-center">{{ $profile->username }} </div>
      <div class="col-6 d-flex justify-content-center align-items-center">{{ $profile->age }} </div>
</div>

@endforeach
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