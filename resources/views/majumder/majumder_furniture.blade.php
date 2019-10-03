@extends('layout')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/majumder_furniture.css">
</head>
<body>

	@section('majumder_furniture')


<div class="container">

	<div class="row">
		<div class="col-md-4 text-center left1">

			<ul class="list-group">
			  <!-- <li class="list-group-item">
			  	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
			  </li> -->

			    <li class="list-group-item">
			    	<div class="dropright">

			          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			            Door
			          </a>

			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			         	 
			                <a class="dropdown-item" href="/single_door">Single Door</a>
			                <a class="dropdown-item" href="/double_door">Double Door</a>
			          	
			     	</div>

			        </div>
		 	    </li>

			  <li class="list-group-item">
			  	<div class="dropright">

			          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			            Almirah
			          </a>

			          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                <a class="dropdown-item" href="/single_almirah">Single-Part Almirah</a>
		                <a class="dropdown-item" href="/double_almirah">Multi-Part Almirah</a>
			          </div>

			        </div>
			  </li>

			  <li class="list-group-item">
			  	<div class="dropright">

			          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			            Showcase
			          </a>

			          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                <a class="dropdown-item" href="/majumder_real">Office Showcase</a>
		                <a class="dropdown-item" href="/majumder_timber">Home Showcase</a>
		                <a class="dropdown-item" href="/majumder_plaza">Single Showcase</a>
		                <a class="dropdown-item" href="/majumder_market">Large Showcase</a>
			          </div>

			        </div>
			  </li>

			  <li class="list-group-item">
			  	<div class="dropright">

			          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			            Bed
			          </a>

			          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                <a class="dropdown-item" href="/majumder_real">Master Bed</a>
		                <a class="dropdown-item" href="/majumder_timber">Children Bed</a>
			          </div>

			        </div>
			  </li>

			  <li class="list-group-item">
			  	<div class="dropright">

			          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			            Wardrobe
			          </a>

			          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                <a class="dropdown-item" href="/majumder_real">Wardrobe</a>
			          </div>

			        </div>
			  </li>

			</ul>

		</div>
	</div>

</div>

@endsection

</body>
</html>
