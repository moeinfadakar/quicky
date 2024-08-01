<html>
    <head>
     <link rel="stylesheet"  type="text/css" href="{{ url("/css/Signup.css") }}"  >
     <link rel="stylesheet" href="css/linearicons.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="{{ url("css/bootstrap.css") }} ">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/nice-select.css">							
     <link rel="stylesheet" href="css/animate.min.css">
     <link rel="stylesheet" href="css/jquery-ui.css">			
     <link rel="stylesheet" href="{{ url("css/main.css") }} ">
     <link rel="stylesheet" href="{{ url("/fontawsome/all.js") }}">
         <title>Sign Up For Users</title>
        
         <style>
          
         </style>
     </head>
     <body>

      <h1 class=" text-center   mt-3">Sign Up For Users</h1>
        
      <br>
      <br>
      <br>
      <br>
      <br>
      
                      <div class="container">
  
   <div id="scrollWrapperUser">
  
              <form  id="step1" class="ml-5" method="POST" action="{{ url("/UserSignup-Post") }}"  >
               <div class="row d-flex justify-content-center align-items-center">
                      <h2 class=" text-center mb-4">STEP 1</h2>
                  </div>           
              <div class="row mt-3 " id="setp1">
                  <div class="col-6"><div class="form-floating mb-3">
                      <input type="text" class="form-control inputs  focus-ring-light " id="floatingInput" placeholder="Fullname" name="Fullname">
                      
                    </div></div>
                  <div class="col-6"><div class="form-floating mb-3">  
                      <input type="text" class="form-control inputs" id="floatingInput" placeholder="Username"  name="Username">
                 
                    </div></div>
                  <div class="col-6"><div class="form-floating mb-3">  
                      <input type="email" class="form-control inputs" id="floatingInput" placeholder="Email" name="Email">
                 
                    </div></div>
                  <div class="col-6"><div class="form-floating mb-3">
                      <input type="text" class="form-control inputs" id="floatingInput" placeholder="Number" name="Number">
                      
                    </div></div>
                  <div class="col-12 d-flex justify-content-center "><button type="button" class=" btn btn-light d-flex justify-content-center " id="next" >next</button></div>
              </div>
               
  
  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  <br>
  <br>
  <br>

  
      <div class="row d-flex justify-content-center align-items-center"">
          <h2 class=" text-center  mb-4">STEP 2</h2>
      </div>
  <div class="row" id="setp2">
  
      <div class="col-6"><div class="form-floating mb-3">
          <input type="text" class="form-control inputs" id="floatingInput" placeholder="Password" name="Password">
        </div></div>
      <div class="col-6"><div class="form-floating mb-3">
          <input type="text" class="form-control inputs" id="floatingInput" placeholder="Re-enter-Password" name="passwords">
        </div></div>
      <div class="col-6">
  
          <select class="form-select inputs" aria-label="Default select example" name="city">
              <option selected hidden selected>Select Your City</option>
                @foreach ($allCities as $City )
            <option value="{{ $City->id  }}" class="inputs" >{{ $City->name  }}</option>           
                @endforeach
           
                *
            </select>
      </div>
        @csrf
          <div class="col-6 "><div class="form-floating mb-3">
              <input type="text" class="form-control inputs" id="floatingInput" placeholder="ID card number" name="IDcardnumber">
            </div></div>
   
          <div class="col-6 "><div class="form-floating mb-3">
            <select class="form-select  inputs " aria-label="Default select example" name="age">
              <option selected hidden disabled>Select your age</option>
               @for ($i = 18 ; $i <= 80; $i++  )
                  <option value="{{ $i }}">{{ $i }}</option>
               @endfor
             
  
            </select>
            </div></div>
          <div class="col-6 "><div class="form-floating mb-3">
              <select class="form-select inputs" aria-label="Default select example" name="gender">
                  <option selected>select Your Gender</option>
                  <option value="1">male</option>
                  <option value="2">female</option>
                </select>
            </div></div>
   
      <div class="col-6  d-flex justify-content-center "><button type="button" class=" btn btn-light" id="per" >periveos</button></div>
      <div class="col-6 d-flex justify-content-center "><button type="submit" class=" btn btn-danger "  >Submit</button></div>

    </div>
  

  
  
  
              </form>
  
   </div>




         <script src="./scripts.js"></script>
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
    <script src="{{ url("/js/multi.js") }}"></script>	
    <script src="{{ url("/js/multi-user.js") }}"></script>	
    <script src="{{ url("/fontawsome/all.js") }}"></script>	 
 




 </body>
 </html>
