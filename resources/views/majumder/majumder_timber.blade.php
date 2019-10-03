@extends('layout')



@section('majumder_timber')

<!-- <h5 class="text-center">This is majumder_timber</h5> -->

	
	<div class="container">
			<div class="row">

				<div class="col-md-8">
					<div class="row">

						@foreach($user as $users)

						<div class="col-md-4" style="padding: 0.1em;">

									  <a href="{{ URL::to('/images/' . $users->name) }}" target="_blank">
									  <img src="{{ URL::to('/images/' . $users->name) }}" alt="Lights" style="width:100%"/>
									  </a>
						</div>

						@endforeach

					</div>      <!-- inner row -->
				</div>     <!-- end of inner md-8 -->

				
				<div class="col-md-4 list2">
					<ul class="list-group">

					  <li class="list-group-item list-group-item-dark text-center" style="background-color: #808080;height: 3em;text-transform: uppercase;color: #d9d9d9">Our Products and Goods</li>
					  <li class="list-group-item"><a href="https://www.google.com/search?q=burma+teak&oq=BURMA+TE&aqs=chrome.1.69i57j0l5.2519j0j7&sourceid=chrome&ie=UTF-8">Burma Teak</a><i>Country of Origin: Myanmar (Burma)
					  </li></i>
					  <li class="list-group-item"><a href="https://www.google.com/search?ei=tmRyXNuhHcmPwgOW-Ilo&q=+teak+wood&oq=+teak+wood&gs_l=psy-ab.3..0i67j0i7i30j0i67j0i7i30l4j0i67j0l2.4569.4569..4761...0.0..0.116.116.0j1......0....1..gws-wiz.......0i71.HpykA_GD54Q">Chittagong Teak</a><i>Country of Origin: Chittagong, Bangladesh</li></i>
					  <li class="list-group-item"><a href="https://www.google.com/search?q=iron+wood&oq=iron+wo&aqs=chrome.1.69i57j0l5.2671j0j9&sourceid=chrome&ie=UTF-8">Iron Wood</a><i>Country of Origin: Africa</li></i>
					  <li class="list-group-item"><a href="https://www.google.com/search?q=teak+chamble+wood&sa=X&ved=2ahUKEwiZkbD8iNTgAhUEknAKHZZJBawQ1QIoAXoECAYQAg&biw=1920&bih=937">Teak Chamble</a><i>Country of Origin: Bangaldesh & Myanmar (Burma)</li></i>
					  <li class="list-group-item"><a href="https://www.google.com/search?q=gurjan+wood&oq=garjan&aqs=chrome.2.69i57j0l5.6751j0j9&sourceid=chrome&ie=UTF-8">Garjan Wood</a><i>Country of Origin: Bangladesh & Myanmar (Burma)</li></i>
					  <li class="list-group-item"><a href="https://www.google.com/search?q=gamari+wood&spell=1&sa=X&ved=0ahUKEwippr3_idTgAhVLPo8KHQc4AqIQBQgpKAA&biw=1920&bih=937">Gamari Wood</a><i>Country of Origin: Bangladesh</li></i>
					  <li class="list-group-item"><a href="https://commons.wikimedia.org/wiki/Category:Trees_in_Bangladesh">Shil korai</a><i>Country of Origin: Bangladesh</li></i>
					  <li class="list-group-item"><a href="https://www.google.com/search?q=chapalish+tree&oq=chapalish&aqs=chrome.1.69i57j0l2.3791j0j4&sourceid=chrome&ie=UTF-8">Chapalish</a><i>Country of Origin: Bangladesh</li></i>
					  <li class="list-group-item"><a href="https://www.google.com/search?q=mahogany+tree+wood&source=lnms&tbm=isch&sa=X&ved=0ahUKEwix6oKxjNTgAhUHi3AKHefPDAMQ_AUIDigB&biw=1920&bih=937">Mahogany</a><i>Country of Origin: Bangladesh</li></i>
					  <li class="list-group-item"><a href="https://www.google.com/search?client=firefox-b-d&q=mango+wood">Mango Wood</a><i>Country of Origin: Bangladesh</li></i>
					</ul>

				</div>

			</div>      <!-- end of main col-12 -->
	
	</div>	  <!-- end of container 1 -->

	<div class="heading1"></div>
	
	<!-- <div class="container">
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
	</div> -->

@endsection


