@extends('layout')



@section('adminLogin')



<h4 class="text-center">this is adminLogin</h4>

<div class="container col-sm-4">

		@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/adminLogin" method="post">

	<input type="hidden" name="_token" value="{{csrf_token()}}">

	<div class="form-group">
		<input type="email" class="form-control" name="email" placeholder="Enter email">
	</div>

	<div class="form-group">
		<input type="password" class="form-control" name="password" placeholder="Enter password">
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-success">Submit</button>
	</div>

</form>

</div>

@endsection
