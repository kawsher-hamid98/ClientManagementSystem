
@extends('layout')


<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

	@section('double_door')

	<h5 class="text-center">Double Door</h5>

	<div class="container">
		<div class="row">
		
		@foreach( $double_door as $users )	

			<div class="col-md-2" style="margin-bottom: 2em">


			<a href="{{ URL::to('/furniture/doubledoor/' . $users->name) }}" target="_blank">
				<img src="{{ URL::to('/furniture/doubledoor/' . $users->name) }}" style="width: 100%; height: 100%" alt="Lights"/>
				</a>

			    <p class="card-text text-center">
			    	{{ $users -> title }}
			    </p>

		    </div>

	     @endforeach


		</div>
		{{ $double_door->links() }}
	</div>	

</body>
</html>




@endsection