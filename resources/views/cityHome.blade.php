@extends('layout')

@section('chome')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="container city">
	<h5>Customer Online Form</h5>

	<form method="post" action="/city">

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

		<div class="row">

			<div class="col-lg-6 col-md-7">

				<div class="form-group row">
				<label for="customerName" class="col-sm-5 col-5 col-form-label required">Client Name:</label>
				<div class="col-sm-7 col-7">
					<input type="text" name="customerName" class="form-control" placeholder="Enter Client Name">
				</div>
			</div>

			<div class="form-group row">
				<label for="customerFileNo" class="col-sm-5 col-5 col-form-label required">File No:</label>
				<div class="col-sm-7 col-7">
					<input type="text" name="customerFileNo" class="form-control" placeholder="Enter FileNo">
				</div>
			</div>

			<div class="form-group row">
				<label for="customerPhoneNo" class="col-sm-5 col-5 col-form-label required">Phone No:</label>
				<div class="col-sm-7 col-7">
					<input type="text" name="customerPhoneNo" class="form-control" placeholder="Enter Phone No">
					<p><small>Phone number must be 11 digits</small></p>
				</div>
			</div>

			<div class="form-group row">
				<label for="additionalPhoneNo" class="col-sm-5 col-5 col-form-label">Phone No 2:</label>
				<div class="col-sm-7 col-7">
					<input type="text" name="additionalPhoneNo" class="form-control" placeholder="Enter Additional Phone No">
				</div>
			</div>

			<div class="form-group row">
				<label for="customerFatherName" class="col-sm-5 col-5 col-form-label required">Father Name:</label>
				<div class="col-sm-7 col-7">
					<input type="text" name="customerFatherName" class="form-control" placeholder="Enter Customer Father Name">
				</div>
			</div>

			<div class="form-group row">
				<label for="customerMotherName" class="col-sm-5 col-5 col-form-label required">Mother Name:</label>
				<div class="col-sm-7 col-7">
					<input type="text" name="customerMotherName" class="form-control" placeholder="Enter Mother Name">
				</div>
			</div>

			<div class="form-group row">
				<label for="customerCurrentAddress" class="col-sm-5 col-5 col-form-label required">Current Address:</label>
				<div class="col-sm-7 col-7">
					<input type="text" name="customerCurrentAddress" id="textInput" class="form-control" placeholder="Enter Current Address">
				</div>
			</div>

			<div class="form-group row">
				<label for="customerPermanentAddress" class="col-sm-5 col-5 col-form-label required">Permanent Address:</label>
				<div class="col-sm-7 col-7">
					<input type="text" name="customerPermanentAddress" id="textInput" class="form-control k" placeholder="Enter Permanent Address">
				</div>
			</div>
				
			</div>

			<div class="col-lg-6 col-md-7">

				<div class="form-group row">
					<label for="preferenceType" class="col-sm-5 col-5 col-form-label required">Preference Type:</label>
					<div class="col-sm-7 col-7">
						<select name="preferenceType" class="form-control selectBox" id='dropdown'>
							<option disabled selected value> -- select type -- </option>
							<option value="Apartment">Apartment</option>
							<option value="Commercial">Commercial</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="apartmentType" class="col-sm-5 col-5 col-form-label required">Apartment Type:</label>
					<div class="col-sm-7 col-7">
						<select name="apartmentType" disabled="true" class="form-control apartment selectBox">
							<option disabled selected value> -- select an option -- </option>
							<option value="Type A">Type A</option>
							<option value="Type B">Type B</option>
							<option value="Type C">Type C</option>
							<option value="Type D">Type D</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="apartmentSize" class="col-sm-5 col-5 col-form-label required">Apartment Size:</label>
					<div class="col-sm-7 col-7">
						<input type="text" name="apartmentSize" id="textInput" disabled="true" class="form-control apartment" placeholder="Enter apartmentSize" disabled="true">
					</div>
				</div>

				<div class="form-group row">
					<label for="commercialType" class="col-sm-5 col-5 col-form-label required">Coommercial Type:</label>
					<div class="col-sm-7 col-7">
						<select name="commercialType" class="form-control commercial selectBox" disabled="true">
							<option disabled selected value> -- select an option -- </option>
							<option value="Area A">Area A</option>
							<option value="Area B">Area B</option>
							<option value="Area C">Area C</option>
							<option value="Area D">Area D</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="commercialSize" class="col-sm-5 col-5 col-form-label required">Commercial Size:</label>
					<div class="col-sm-7 col-7">
						<input type="text" name="commercialSize" id="textInput" disabled="true" class="form-control commercial" placeholder="Enter commercialSize" disabled="true">
					</div>
				</div>

				<div class="form-group row">
					<label for="pricePerSqFt" class="col-sm-5 col-5 col-form-label required">Price/sq ft:</label>
					<div class="col-sm-7 col-7">
						<input type="text" name="pricePerSqFt" id="textInput" disabled="true" class="form-control dpayment" placeholder="Enter pricePerSqFt" disabled="true">
					</div>
				</div>

				<div class="form-group row">
					<label for="downPayment" class="col-sm-5 col-5 col-form-label required">downPayment:</label>
					<div class="col-sm-7 col-7">
						<input type="text" name="downPayment" id="textInput" disabled="true" class="form-control dpayment" placeholder="Enter downPayment" disabled="true">
					</div>
				</div>

				<div class="form-group row">
					<label for="totalInstallment" class="col-sm-5 col-5 col-form-label required">totalInstallment:</label>
					<div class="col-sm-7 col-7">
						<input type="number" name="totalInstallment" id="textInput" disabled="true" class="form-control dpayment" placeholder="Enter totalInstallment" disabled="true">
					</div>
				</div>

			</div>
			
		</div>

		<button class="btn btn-sm btn-success" type="submit">Add Client</button>
	</form>

</div>

<script type="text/javascript">
	//$("select").on('change',function(){

	$('#dropdown').change(function() {
	    if( $(this).val() == 'Apartment') {
	        $(".apartment").prop('disabled', false); 
	        $(".commercial").prop('disabled', true);
	        $(".dpayment").prop('disabled', false);
	    }else if($(this).val() == 'Commercial') {
	    	$(".commercial").prop('disabled', false);
	    	$(".apartment").prop('disabled', true);
	    	$(".dpayment").prop('disabled', false);
	    }else {
	    	$(".dpayment").prop('disabled', true);
	    }
	});

</script>

</body>
</html>
<!-- dsqft
dpayment -->

@endsection

