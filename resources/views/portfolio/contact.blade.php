@extends('layout')



@section('contact')

	<div class="container text-center">
		<div class="heading_contact">
			<p>Place your query or message <br> Get reply from us! </p>
		</div>
	</div>

	<div class="container col-sm-4 contact1">
		<!-- <h5 class="text-center">Place your Order or any Query</h5> -->


			@if(count($errors) > 0)

				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">x</button>

					<ul>
						@foreach($errors -> all() as $error)
							<li>{{ $error }}</li>
						@endforeach	
					</ul>

				</div>

			@endif

			@if($message = Session::get('success'))

				<div class="alert alert-success
				alert-block">
					<button type="button" class="close" data-dismiss="alert">x</button>
					<strong>{{ $message }}</strong>
				</div>

			@endif
		
			<form action="/contact" method="post">

				<input type="hidden" name="_token" value="{{csrf_token()}}">
				
				<div class="form-group">
					
					<input type="text" name="name" id="name" placeholder="Enter your name" class="form-control" required="">
				</div>

				<div class="form-group">
					
					<input type="email" name="email" id="email" placeholder="Enter your Email" class="form-control" required="">
				</div>

				<div class="form-group">
					
					<input type="text" name="subject" id="subject" placeholder="Enter your Subject" class="form-control" required="">
				</div>

				<div class="form-group">
					
					<textarea name="message" id="message" placeholder="Enter your message or query.." class="form-control" required=""></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-info" name="send">Send</button>
				</div>

			</form>


	</div>

@endsection