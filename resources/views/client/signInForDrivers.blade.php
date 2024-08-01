<head>
    <link rel="stylesheet"  type="text/css" href="{{ url("/css/Signup.css") }}"  >
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="{{ url("css/bootstrap.css") }} ">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">							
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">			
    <link rel="stylesheet" href="{{ url("css/main.css") }} ">
    <link rel="stylesheet" href="{{ url("/fontawsome/all.js") }}">
        <title>Sign Up For Drivers</title>
    
    </head>

<div class="container-fluid">
    <div class="row">
        <div class="form-wrapper m-auto " style="width: 600px">
            <h2 class=" text-center mt-5 mb-5" > <i class=" fa fa-car" ></i> Sign in For Drivers <i class=" fa fa-tire"></i></h2>
            <form action="{{ url("/signinDriver-post") }}" method="POST">
<div class="row m-auto">
    @csrf
         <div class="col-12"><input type="text" name="NAME"  
            @if (isset($_COOKIE["EUN"]))
            
            value="{{  $_COOKIE["EUN"]  }}"
            
                    @endif 
            
            class=" inputs w-100 " style="height: 3rem; font-size:1.5rem"  placeholder="USERNAME | EMAIL | NUMBER" required></div>
            <div class="col-12 mt-3"><input type="text"    
                @if (isset($_COOKIE["password"]))
                value="{{  $_COOKIE["password"]  }}"
                        @endif 
                class=" inputs w-100" style=" height:3rem; font-size:1.5rem"   name="password" placeholder="PASSWORD" required></div>
</div>
<div class="col-12 d-flex justify-content-center mt-3">
    <div class="con">
      <input type="checkbox" id="remeberMe"  name="rememberMe"  style="" >
    <label for="remeber"  id="remeberMeInput"  class="" style="font-size: 20px !important ;   ;text-align:center ;  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif !important ; " >Remeber me</label>
    </div>
    </div>
   <div class="row  m-auto mt-5 d-flex justify-content-center align-items-center">
    <button class=" btn btn-light mt-5  fw500 fa-signal-5 " type="submit" >Submit</button>
   </div>

            </form>


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
<script src="{{ url("/js/remeberMe.js") }} "></script>		
<script src="{{ url("/fontawsome/all.js") }}"></script>	 