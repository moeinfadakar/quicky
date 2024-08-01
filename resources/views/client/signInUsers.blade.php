<head>
    <link rel="stylesheet"  type="text/css" href="{{ url("/css/Signup.css") }}"  >
    <link rel="stylesheet"  type="text/css" href="{{ url("/css/bootstrap/bootstrap.css") }}"  >
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="{{ url("css/bootstrap.css") }} ">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">							
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">			
    <link rel="stylesheet" href="{{ url("css/main.css") }} ">
    <link rel="stylesheet" href="{{ url("/fontawsome/all.js") }}">
        <title>Sign Up For Users</title>
    
    </head>

<div class="container-fluid">
    <div class="row">
        <div style="width: 30rem  ;height:20rem  " class="form-wrapper m-auto ">
            <h2 class=" text-center mt-5 mb-5" > <i class=" fa  fa-directions" ></i> Sign in For User <i class=" fa fa-user-plus"></i></h2>
            <form action="{{ url("/userSignIn-post") }}" method="POST">
                @csrf
<div class="row m-auto">
         <div class="col-12  p-2"><input type="text" name="NAME"  style="height: 3rem; font-size:1.5rem ; color:white !important"  class="inputs  w-100 "      
            @if (isset($_COOKIE["UEN"]))
            
            value="{{  $_COOKIE["UEN"]  }}"
            
                    @endif 
        
            placeholder="USERNAME | EMAIL | NUMBER" required></div>



            <div class="col-12 mt-3 p-2"><input type="password" style="height: 3rem ; font-size:1.5rem; color:white important ;" name="password"  class="inputs w-100 "
                @if (isset($_COOKIE["password"]))
            
                value="{{  $_COOKIE["password"]  }}"
                
                        @endif 
                placeholder="PASSWORD" required></div>
</div>
<div class="col-12 d-flex justify-content-center mt-3">
    <div class="con">
      <input type="checkbox" id="remeberMe"  name="remember"  style="" >
    <label for="remeber"  id="remeberMeInput"  class="" style="font-size: 20px !important ;   ;text-align:center ;  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif !important ; " >Remeber me</label>
    </div>

</div>
   <div class="row  m-auto mt-5 d-flex justify-content-center align-items-center">
    <button class=" btn btn-light mt-5  fw500 fa-signal-5 " style="font-family:  'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif  !important ; " type="submit" >Submit</button>
   </div>

            </form>

        </div>
    </div>
</div>
<script src="" ></script>
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ url("/js/bootstrap.min.js") }} "></script>			
<script src="{{ url("/js/remeberMe.js") }} "></script>			
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