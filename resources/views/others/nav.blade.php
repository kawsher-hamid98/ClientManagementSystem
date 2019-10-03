<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #666666;">

    <a class="navbar-brand" href="/" style="color:#d9d9d9;text-transform: uppercase;letter-spacing: 0.1em;font-size: 1.1em; font-weight: 400">
     Majumder Global
    </a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>

      @if(Auth::user())
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/dash')}}">Dash</a>
      </li>
      @endif

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Companies
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <div class="dropdown_majumder">
              <a class="dropdown-item" href="/majumder_real">majumder real estate</a>
              <a class="dropdown-item" href="/majumder_timber">majumder timber</a>
              <a class="dropdown-item" href="/majumder_plaza">majumder plaza</a>
              <a class="dropdown-item" href="/majumder_market">majumder market</a>
              <a class="dropdown-item" href="/majumder_furniture">majumder furniture</a>
              <a class="dropdown-item" href="/majumder_season">majumder seasoning plan</a>
          </div>
      <!--     <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <div class="dropdown_majumder">
              <a class="dropdown-item" href="/corporate_profile">Corporate Profile</a>
              <a class="dropdown-item" href="/our_vision">Our Vision</a>
          </div>
      <!--     <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Meet Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <div class="dropdown_majumder">
              <a class="dropdown-item" href="/chairman_message">Chairman Message</a>
              <!-- <a class="dropdown-item" href="/our_vision">Our Vision</a> -->
          </div>
      <!--     <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/contact')}}">Contact</a>
      </li>

    <!--   <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->

    </ul>

     <ul class="navbar-nav navbar-right">

      @if(Auth::user())

      <li><a class="nav-link" href="{{ URL::to('/logout')}}">Logout</a></li>
      <li class="nav-link"><span>{{ ucwords(Auth::user() -> name) }}</span></li>

        @else

         <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/login')}}">Sign In</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/register')}}">Register</a>
         </li>

        @endif
    </ul>

    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->




  </div>

</nav>
