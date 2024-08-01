
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  type="text/css" href="{{ url("/css/Signup.css") }}"  >
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="{{ url("css/bootstrap.css") }} ">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">							
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">			
    <link rel="stylesheet" href="{{ url("css/main.css") }} ">
    <link rel="stylesheet" href="{{ url("/fontawsome/all.js") }}"  type="text/css" >
    <title>Trip For Users</title>
    <style>
        .colmn__wrapper{

margin:  auto ;
            width: 17rem  !important;
          display: grid;
          grid-template-columns: 60px 60px 60px ;
          grid-template-rows:   60px 60px 60px  ;
           padding: 10px ;
           grid-column-gap: 2rem ;
           grid-row-gap: 2rem ;


        }

        .option{

            
        }
        .option:hover{
          transform: scale(0.9 , 0.9) !important;
           transition: all 0.5s   !important;  
 

        }
        .bgcYellow{
            background-color: rgb(249, 215, 0) !important;
        }
    </style>
</head>
<body class=" p-3">
    
<div class="container-fluid bgcYellow">
      <div id="googleMap" style="width:100%;height:400px; boreder:1 px solid black"></div>
</div>
<div class="row mb-5 mt-5">
<div class="col-3">
    <p class=" text-center  fw500"  style="color: black; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; font-size:20px ;" > From: 
      <br>
      <b  class=" text-white"  id="orgineLatLng"  ></b> </p>
</div>
<div class="col-3">
    <p class=" text-center fw500"  style="color: black; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; font-size:20px ; " > to: 
      <br>
      <b  class=" text-white"  id="destinationLatLng"   ></b> </p>
</div>
<div class="col-3   mt-3 p-2">
  <p class=" text-center fw500"  style="color: black; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; font-size:20px ; ">  Price:
      <br>  <b  class=" text-white" id="PricePlace"> </b> </p>
</div>
<div class="col-3   mt-3 p-2">

  <form action="{{ "/sendNewReqestPost" }}" method="POST">
    <input type="hidden" name="start" id="orgineLatLng2" >
    <input type="hidden" name="end"  id="destinationLatLng2" >
    <input type="hidden" name="price"  id="price2" >
    <input type="hidden" name="userId"  value=" {{ Auth::id() }} " >
    @csrf
    <div class="col-3 d-flex justify-content-center align-items-center">
    <button class=" btn btn-success" type="submit" >Lets Go</button>
    </form>
    
    <button type="button"    class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class=" fa fa-list"></i>
    </button>

</div>
</div>
</div>





<div class="row">
  <div class="col-6  bg-white  mt-3 p-2 ">
    <p class=" text-center fw500" style="color: black; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; font-size:20px ; " >   name:  </p>
</div>
<div class="col-6  bg-white mt-3 p-2 ">
    <p class=" text-center fw500" style="color: black; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; font-size:20px ; " >   car model:   </p>
</div>
</div>










{{-- end if --}}


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-transparent">
        <div class="modal-header">
          <h1 class="modal-title fs-5  m-auto ml-4 text-white pl-5" id="exampleModalLabel">Setting</h1>
        </div>
        <div class="modal-body ">
            <div class="colmn__wrapper ">
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"    ><a href="">  <i class="fa fa-stop" ></i>  </a></div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   ><a><i  class=" fa fa-phone" ></i></a></div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   ><a><i  class=" fa fa-email" ></i></a></div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   ><a><i  class=" fa fa-phone" ></i></a></div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   ><a><i  class=" fa fa-phone" ></i></a></div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   >a</div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   >a</div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   >a</div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   ><a href="{{ url("/logOutUser") }}"><i class=" fa fa-power-off"></i></a></div>
            </div>
  
        </div>
      </div>
    </div>
  </div>

  

<script src="{{ url("/js/map.js") }}"></script>	 
<script src="{{ url("/js/bootstrap.min.js") }} "></script>			
<script src="{{ url("/fontawsome/all.js") }}"></script>	 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ url("/fontawsome/all.js") }}"></script>	

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAovp7XpE5uP9WCfdcUPdHBb21iGk0JhI&callback=myMap"></script>



      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  </body>
</html>
