
@extends('layout')


<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

	@section('single_door')

	<h5 class="text-center" style="margin-bottom: 1em">Single Door</h5>

	<div class="container">
		<div class="row">
		
		@foreach( $single_door as $users )	

			<div class="col-md-3" style="margin-bottom: 1em">

			<a href="{{ URL::to('/furniture/single_door/' . $users->name) }}" target="_blank">
				<img src="{{ URL::to('/furniture/single_door/' . $users->name) }}" style="width: 100%;height: auto; alt="Lights"/>
				</a>

			    <p class="card-text text-center">
			    	{{ $users -> title }}
			    </p>

		    </div>

	     @endforeach


		</div>

		<div class="row">

			<div class="col-sm-8 text-center" style="width: 100%; height: auto;">
				
				{{ $single_door->links() }}
			</div>

		</div>

	</div>	

</body>
</html>




@endsection