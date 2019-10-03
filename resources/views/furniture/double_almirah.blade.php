
@extends('layout')


<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

	@section('double_almirah')

	<h5 class="text-center">double_almirah</h5>

	<div class="container">
		<div class="row">
		
		@foreach( $double_almirah as $users )	

			<div class="col-md-2" style="margin-bottom: 2em">


			<a href="{{ URL::to('/furniture/double_almirah/' . $users->name) }}" target="_blank">
				<img src="{{ URL::to('/furniture/double_almirah/' . $users->name) }}" style="width: 100%; height: 100%" alt="Lights"/>
				</a>

			    <p class="card-text text-center">
			    	{{ $users -> title }}
			    </p>

		    </div>

	     @endforeach


		</div>
		{{ $double_almirah->links() }}
	</div>	

</body>
</html>




@endsection