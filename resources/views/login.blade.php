@extends('layout')

@section('login')



<form action="/login" method="post"> 

		<input type="hidden" name="_token" value="{{csrf_token()}}">

	<div class="container col-sm-3 login">

		<h5>Sign In</h5>

		@if (session('error'))
		    <div class="alert alert-danger">
		        {{ session('error') }}
		    </div>
		@endif

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<div class="form-group login_name">
			<div class="input-group">
	            <div class="input-group-prepend">
	               <span class="input-group-text"><i class="fa fa-envelope"></i></span>
	            </div>
				<input type="text" name="email" class="form-control" placeholder="Enter Email">
			</div>
			<!-- @if($errors->has('email')) <p>{{ $errors->first('email') }}</p> @endif -->
		</div>

		<div class="form-group login_name">
			<div class="input-group">
	            <div class="input-group-prepend">
	               <span class="input-group-text"><i class="fa fa-unlock"></i></span>
	            </div>
				<input type="password" name="password" class="form-control" placeholder="Enter Password">
			</div>
			<!-- @if($errors->has('password')) <p>{{ $errors->first('password') }}</p> @endif -->
		</div>

<!-- 		<div class="checkbox">
			<label><input type="checkbox"> Remember me</label>
		</div> -->

		<div class="form-group">
			<button class="btn btn-success" type="submit">Sign in</button>
		</div>

	</div>


</form>






@endsection
