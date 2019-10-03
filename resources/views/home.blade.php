@extends('layout')

@section('home')

	


		<div class="col-md-12">
			

	<div class="row">

		<div class="col-md-1"></div>

		<div class="col-md-3 list1">

			<ul class="list-group">
				  <li class="list-group-item"><a href="/majumder_real">Majumder Real Estate</a></li>
				  <li class="list-group-item"><a href="/majumder_timber">Majumder Timber</a></li>
				  <li class="list-group-item"><a href="/majumder_furniture">Majumder Furniture & Door</a></li>
				  <li class="list-group-item"><a href="/majumder_season">Majumder Seasoning Plan</a></li>
				  <li class="list-group-item"><a href="/majumder_market">Majumder Market</a></li>
				  <li class="list-group-item"><a href="/majumder_plaza">Majumder Plaza</a></li>
			</ul>

			<ul class="list-group" style="margin-top: 4em">
				  <li class="list-group-item" style="text-align: center;font-size: 1.2em; color: gray;letter-spacing: .1rem">Social</li>
				  <li class="list-group-item"><a href="/majumder_real"><i class="fab fa-facebook fa-lg"></i> Facebook</a></li>
				  <li class="list-group-item"><a href="/majumder_timber"><i class="fas fa-envelope fa-lg"></i> Email</a></li>
				  <li class="list-group-item"><a href="/majumder_season">News</a></li>
				  <li class="list-group-item"><a href="/majumder_market">Gallery</a></li>
				  <li class="list-group-item"><a href="/majumder_furniture"><i class="fab fa-youtube fa-lg"></i> Youtube</a></li>
				  <li class="list-group-item"><a href="/majumder_plaza"><i class="fab fa-linkedin fa-lg"></i> Linkedin</a></li>
			</ul>

		</div>

		<div class="col-md-6">
			

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	 
	  <ol class="carousel-indicators">
	   @foreach( $user as $users )
		  <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
	   @endforeach
	  </ol>
	 
	  <div class="carousel-inner" role="listbox">

		@foreach( $user as $users )
		   <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

			  <a href="{{ URL::to('/images/' . $users->name) }}" target="_blank">
						  <img src="{{ URL::to('/images/' . $users->name) }}" alt="Lights" style="width:100%; height: auto"/>
						  </a>

		   </div>
		@endforeach

	  </div>

	
		  <a class="carousel-control-prev" href="#carouselExampleControls" style="color: red" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true" ></span>
			<span class="sr-only">Previous</span>
		  </a>

		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>

	 

	</div>

		</div>     



	</div>

	<div class="heading_home"></div>

		</div>     





@endsection