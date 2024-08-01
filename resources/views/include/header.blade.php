<header id="header">
    <div class="header-top">
  </div>
  <div class="container main-menu">
      <div class="row align-items-center justify-content-between d-flex">
          <a href="{{ url("/") }}" class=" text-white" >QUICKY</a>		
          <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="/">Home <i class=" fa fa-home"></i> </a></li>
                <li><a href="about.html">rules <i class="fa fa-book "></i> </a></li>
                <li><a href="{{ url("/About-us") }}">About us  <i  class=" fa  fa-info-circle" ></i> </a></li>
                <li><a href="{{url("/gallery") }}">Gallery  <i class="fa fa-image"></i> </a></li>
                <li class="menu-has-children"><a href="">passenger <i class=" fa fa-user-plus" ></i></a>
                  <ul class=" bg-dark">
                    <li><a   class=" text-white"  href="{{ url("/SignupForUsers") }}">passenger sign up</a></li>
                    <li><a  class=" text-white"  href="{{ url("/signInUsers") }}">passenger sign in</a></li>
                    </li>					              
                  </ul>
                </li>
                <li class="menu-has-children"><a href="">driver  <i class=" fa fa-car"></i> </a>
                  <ul  class=" bg-dark" >
                    <li><a  class=" text-white" href="{{ url("/signUpForDrivers") }}">driver sign up</a></li>
                    <li><a  class=" text-white" href="{{ url("/SignInForDrivers") }}">driver sign in</a></li>
               
                    </li>					              
                  </ul>
                </li>

              </ul>
          </nav><!-- #nav-menu-container -->		
      </div>
  </div>
</header><!-- #header -->

