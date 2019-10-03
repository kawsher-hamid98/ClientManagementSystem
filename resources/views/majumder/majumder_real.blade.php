@extends('layout')



@section('majumder_real')

<div class="container">

	@if (session('success'))
	    <div class="alert alert-success">
	        {{ session('success') }}
	    </div>
	@endif

	<h5 class="text-center">This is majumder_real</h5>

	<a href="/city">Create new Client</a><br>
	<a href="/cityCustomerData">All Real Estate Clients</a>

</div>

@endsection