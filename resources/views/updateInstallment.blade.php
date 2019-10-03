@extends('layout')

@section('uinstallment')

<div class="container col-lg-6 col-md-7">

	@if (session('success'))
	    <div class="alert alert-success">
	        {{ session('success') }}
	    </div>
	@endif

	<form method="post" action="/InstallmentSave">

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		@foreach($installs as $installment)

		<div class="form-group row">
			<label for="totalAmount" class="col-sm-5 col-5 col-form-label required">Current Due</label>
			<div class="col-sm-7 col-7">
				<input type="text" name="totalAmount" value="{{ $installment -> totalAmount }}" id="textInput" disabled="true" class="form-control dpayment">
			</div>
		</div>

		<div class="form-group row">
			<label for="installmentMoney" class="col-sm-5 col-5 col-form-label required">installment money</label>
			<div class="col-sm-7 col-7">
				<input type="text" name="installmentMoney" value="{{ $installment -> installmentMoney }}" id="textInput" disabled="true" class="form-control dpayment">
			</div>
		</div>

		<div class="form-group row">
			<label for="remainingBalance" class="col-sm-5 col-5 col-form-label required">Next Due</label>
			<div class="col-sm-7 col-7">
				<input type="text" name="remainingBalance" value="{{ $installment -> remainingBalance }}" id="textInput" disabled="true" class="form-control dpayment">
			</div>
		</div>

		<input type="hidden" name="installId" value="{{ $installment -> id }}">
		<input type="hidden" name="userhiddenId" value="{{ $installment -> userid }}">

		<button class="btn btn-sm btn-info" type="submit">Pay</button>

		@endforeach
		
	</form>

</div>







@endsection


