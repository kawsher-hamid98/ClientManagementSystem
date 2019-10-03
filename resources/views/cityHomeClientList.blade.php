@extends('layout')

@section('chomelist')

<div class="container">

	<div class="col-md-4">
		<form action="/search" class="searchBox" method="post" role="search">
		    {{ csrf_field() }}
		    <div class="input-group">
		        <input type="text" class="form-control" name="q" placeholder="Search information.."> 
		        <span class="input-group-btn">
		            <button type="submit" class="btn btn-primary">
		               <!--  <span class="glyphicon glyphicon-search"></span> -->
		               Search
		            </button>
		        </span>
		    </div>
		</form>
	</div>

	<a href="/cityCustomerData/?preferenceType=Apartment">Apartment</a> |
	<a href="/cityCustomerData/?preferenceType=Commercial">Commercial</a> |
	<a href="/cityCustomerData">Reset</a>

	@if (session('success'))
	    <div class="alert alert-success">
	        {{ session('success') }}
	    </div>
	@endif
	
	<table class="table table-sm table-striped">

		<thead>
			<th>ID</th>
			<th>Client Name</th>
			<th>Phone No</th>
			<th>File No</th>
			<th>Preference Type</th>
			<th>#</th>
		</thead>

		<tbody>

			@foreach($clients as $client)

			<tr>
				<td>{{ $client -> id }}</td>
				<td>{{ $client -> customerName }}</td>
				<td>{{ $client -> customerPhoneNo }}</td>
				<td>{{ $client -> customerFileNo }}</td>
				<td>{{ $client -> preferenceType }}</td>
				<td>
					<a href="{{ url('/cityCustomerData/' . $client -> id) }}">More Details</a>
				</td>
			</tr>

			@endforeach

		</tbody>
	</table>
	{{ $clients->links() }}
</div>


@endsection
