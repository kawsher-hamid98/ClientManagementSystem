@extends('layout')

@section('cinstallment')


<div class="container">
	
	<table class="table table-sm table">

		<thead>
			<th>Installment No.</th>
			<th>Installment Date</th>
			<th>Current Total Due</th>
			<th>Installment Amount</th>
<!-- 			<th>Next Total Due</th> -->
			<th>#</th>
		</thead>

		<tbody>
			@foreach($cinstalls as $cinstallment)

				<tr>
					<td>{{ $cinstallment -> tempId }}</td>
					<td>{{ $cinstallment -> installmentDate }}</td>
					<td>{{ $cinstallment -> totalAmount }}/=</td>
					<td>{{ $cinstallment -> installmentMoney }}/=</td>
<!-- 					<td>{{ $cinstallment -> remainingBalance }}/=</td> -->
					<td>
						<a href="{{ url('/editInstallers/' . $cinstallment -> id) }}" class="btn btn-sm btn-warning">Pay</a>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>
	{{ $cinstalls->links() }}

	<a href="/cityCustomerData">All Customers</a>

</div>

@endsection
