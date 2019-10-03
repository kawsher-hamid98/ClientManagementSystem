
@extends('layout')


<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

	@section('single_almirah')

	<h5 class="text-center">single_almirah</h5>

	<div class="container">
		<div class="row">
		
		@foreach( $single_almirah as $users )	

			<div class="col-md-2" style="margin-bottom: 2em">


			<a href="{{ URL::to('/furniture/single_almirah/' . $users->name) }}" target="_blank">
				<img src="{{ URL::to('/furniture/single_almirah/' . $users->name) }}" style="width: 100%; height: 100%" alt="Lights"/>
				</a>

			    <p class="card-text text-center">
			    	{{ $users -> title }}
			    </p>

		    </div>

	     @endforeach


		</div>
		{{ $single_almirah->links() }}
	</div>	

</body>
</html>




@endsection