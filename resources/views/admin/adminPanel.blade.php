

@extends('layout')



@section('adminPanel')



<h4 class="text-center">this is adminPanel</h4>

@if(Session::has('success'))

<div class="row">
	<div class="col-md-12">
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
	</div>
</div>

@endif

	<div class="container">

		<table class="table table-striped table-sm">
			<thead>
				<th>Name</th>
				<th>Email</th>
			</thead>

			<tbody>
				@foreach($admin as $admin1)
				
				<tr>
					<td>{{ $admin1 -> name}}</td>
					<td>{{ $admin1 -> email}}</td>
				</tr>

				@endforeach
			</tbody>
		</table>

	</div>

@endsection
