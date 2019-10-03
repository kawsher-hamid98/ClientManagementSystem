@extends('layout')

@section('cedit')

<div class="container col-lg-6 col-md-7">
	<h5>Customer Online Form</h5>

	<form method="post" action="/cityCustomerEdit">

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		@foreach($customers as $customer)

			<div class="form-group row">
				<label for="customerPhoneNo" class="col-sm-5 col-5 col-form-label required">Phone No:</label>
				<div class="col-sm-7 col-7">
					<input type="text" name="customerPhoneNo" value="{{ $customer -> customerPhoneNo }}" class="form-control" placeholder="Enter Phone No">
				</div>
			</div>

			<div class="form-group row">
				<label for="additionalPhoneNo" class="col-sm-5 col-5 col-form-label">Phone No 2:</label>
				<div class="col-sm-7 col-7">
					<input type="text" name="additionalPhoneNo" value="{{ $customer -> additionalPhoneNo }}" class="form-control" placeholder="Enter Additional Phone No">
				</div>
			</div>


			<div class="form-group row">
				<label for="customerCurrentAddress" class="col-sm-5 col-5 col-form-label required">Current Address:</label>
				<div class="col-sm-7 col-7">
					<input type="text" name="customerCurrentAddress" value="{{ $customer -> customerCurrentAddress }}" id="textInput" class="form-control" placeholder="Enter Current Address">
				</div>
			</div>

			<input type="hidden" name="customerId" value="{{ $customer -> id }}">

		@endforeach

		<button class="btn btn-sm btn-info" type="submit">Update</button>

	</form>

</div>

@endsection