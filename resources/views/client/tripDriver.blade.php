
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
    <link rel="stylesheet" href="{{ url("/fontawsome/all.js") }}">
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
       body{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif !important;
       }
        .option{

            
        }
        .option:hover{
          transform: scale(0.9 , 0.9) !important;
           transition: all 0.5s   !important;  
 

        }
        .bgcYellow{
            background-color: rgb(238, 207, 3) !important;
        }
    </style>
</head>
<body class=" p-3 bgcYellow" dir="rtl">
    
<div class="container-fluid bgcYellow">
  <h2 class=" text-center" >WELCOME  </h2>

    <div class="row">
    <div id="googleMap" class="col-9 bg-white rounded-3 position-fixed" style="height: 35rem; top:5% important; left:3% !important; width:70% !important">
    </div>
<div class="col-3 ">

    <div class="row">
      
        <div class="col-11 m-auto">

<h2 class=" text-center">TRIPS LIST</h2>
 <div class="row mb-2  d-flex justify-content-end">

    <div class="col-12 d-flex justify-content-center align-items-center mb-2 ">
        <button type="button" class="btn-light btn mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal1">
        SETTING <i class=" fa fa-gear"></i>
     </button>
    <a type="button" class="btn-danger btn"  href="#">
       EXIT <i class="fa-regular fa-power-off"></i>
     </a>
    <a type="button" class="btn-info m-2 btn"  href="#">
       REFRESH <i class="fa-regular fa-power-off"></i>
     </a>

     
    </div>       
    


{{-- foreach --}}
@foreach($allRequest as $request)

 <form action="{{ "/acceptedRequestPost" }}" method="POST" >
  @csrf
                <div class="card text-center  p-0 "  id="request{{$request->id  }}"  >
                <div class="card-header">
                  New Trip
                  <br>
                     {{ $request->created_at  }}
                 </div>
                <div class="card-body">
                  <h5 class="card-title">from: <b class=" text-warning"> {{  $request->start }}</b></h5>
                  <input value=" {{  $request->price }}" type="hidden" name="price" >
                  <input value=" {{  $request->id }}" type="hidden" name="id" >
                  <h5 class="card-title">to : <b class=" text-warning"> {{  $request->end }}</b> </h5>
                  <h5 class="card-text">Cost: <b class=" text-warning" >{{  $request->price }} $ </b> </h5>
                  <div class=" d-flex justify-content-center align-items-center">
                    <button type="submit" id="acceptRequest"   class="btn btn-warning m-2">Accept  <i class="fa-thin fa-check fs-6"></i></button>
                  <button  onclick="DeleteRequest({{$request->id }})"  class="btn btn-danger m-2"> Reject <i class="fa-thin fa-circle-xmark"></i> </button>
                  </div>
                </div>
              </div>
 </form>
{{-- enfroreach --}}
@endforeach

<input type="hidden" value="{{ Auth::id() }}" id="ID"  >
<input type="hidden" id="csrf"  value="{{ csrf_token() }}" >







        </div>
    </div>
</div>
    </div>

</div>

<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-transparent">
        <div class="modal-header">
          <h1 class="modal-title fs-5  m-auto ml-4 text-white pl-5" id="exampleModalLabel">Setting</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
            <div class="colmn__wrapper ">
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"  id='startWork'  >startWork</div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   >Trips</div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   >Rating</div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   > </div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   ></div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   >a</div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   >a</div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   >a</div>
            <div class="  rounded-2 text-center fs-6   bg-light   text-dark  option d-flex justify-content-center align-items-center"   ><a href="{{ url("/logOutDriver") }}"> <i class=" fa fa-power-off" ></i> </a></div>
            </div>
    




        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{  url("/js/driverMap.js") }}"></script>	
<script src="{{ url("/fontawsome/all.js") }}"></script>	 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAovp7XpE5uP9WCfdcUPdHBb21iGk0JhI&callback=myMap"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ url("/fontawsome/all.js") }}"></script>	
</body>
</html>

