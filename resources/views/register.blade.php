@extends('layout')

@section('register')


@if(Session::has('success'))

<div class="row">
	<div class="col-md-12">
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
	</div>
</div>

@endif

<form action="register_action" method="post">

	<input type="hidden" name="_token" value="{{csrf_token()}}">
	
	<div class="container register col-sm-3">

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

			<h5>Register</h5>

		<div class="form-group register_name">
		  	<div class="input-group">
	            <div class="input-group-prepend">
	               <span class="input-group-text"><i class="fa fa-user"></i></span>
	            </div>
				<input type="text" name="name" class="form-control" placeholder="Enter Name">
			</div>
		</div>

		<div class="form-group register_name">
			<div class="input-group">
	            <div class="input-group-prepend">
	               <span class="input-group-text"><i class="fa fa-envelope"></i></span>
	            </div>
				<input type="email" name="email" class="form-control" placeholder="Enter Email">
			</div>
		</div>

		<div class="form-group register_name">
			<div class="input-group">
	            <div class="input-group-prepend">
	               <span class="input-group-text"><i class="fa fa-lock"></i></span>
	            </div>
				<input type="password" name="password" class="form-control" placeholder="Enter Password">
			</div>
		</div>

		<div class="form-group register_name">
			<div class="input-group">
	            <div class="input-group-prepend">
	               <span class="input-group-text"><i class="fa fa-check"></i></span>
	            </div>
				<input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
			</div>
		</div>

		<div class="checkbox">
			<label><input type="checkbox"> Remember me</label>	
		</div>

		<div class="form-group">
			<button class="btn btn-primary" type="submit">Register</button>
		</div>

	</div>


</form>


@endsection