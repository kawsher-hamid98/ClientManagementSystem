@extends('layout')

@section('chomelist')

<div class="container customer1">

	<div class="row">

		@foreach($customers as $customer)

			<div class="col-md-6">

				<h5>Personal Information</h5>

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Client Name:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> customerName }}</div>
				</div>

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Father Name:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> customerFatherName }}</div>
				</div>

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Mother Name:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> customerMotherName }}</div>
				</div>

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Phone No:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> customerPhoneNo }}</div>
				</div>

				@if (empty($customer -> additionalPhoneNo))

				@else

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Secondary Phone No:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> additionalPhoneNo }}</div>
				</div>

				@endif

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Current Address:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> customerCurrentAddress }}</div>
				</div>

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Permanent Address:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> customerPermanentAddress }}</div>
				</div>

			</div>

			<div class="col-md-1 vl"></div>

			<div class="col-md-5 customer2">

				<h5>Purchase Information</h5>

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6" style="color: red">File No:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> customerFileNo }}</div>
				</div>

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Preference Type:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> preferenceType }}</div>
				</div>

				@if (empty($customer -> apartmentType))
					
				@else

					<div class="row">
						<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Apartment Type:</div>
						<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> apartmentType }}</div>
					</div>

					<div class="row">
						<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Apartment Size:</div>
						<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> apartmentSize }} sq ft</div>
					</div>

				@endif

				@if (empty($customer -> commercialType))
					
				@else
					<div class="row">
						<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Commercial Type:</div>
						<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> commercialType }}</div>
					</div>

					<div class="row">
						<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Commercial Size:</div>
						<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> commercialSize }} sq ft</div>
					</div>

				@endif

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Price/sq ft:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> pricePerSqFt }}/=</div>
				</div>

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Total Price:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6"><b>{{ $customer -> totalPrice }}/=</b></div>
				</div>

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Down Payment:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> downPayment }}/=</div>
				</div>

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6"  style="color: red">Due Amount:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> dueAmount }}/=</div>
				</div>

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Total Installment:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> totalInstallment }}</div>
				</div>

				<div class="row">
					<div class="name col-lg-5 col-md-6 col-sm-6 col-6">Next Payment:</div>
					<div class="data col-lg-7 col-md-6 col-sm-6 col-6">{{ $customer -> nextPayment }}/=</div>
				</div>


				<a href="{{ url('/cityCustomerEdit/' . $customer -> id) }}" class="btn btn-sm btn-success">Edit</a>

				<a href="{{ url('/cityInstallments/' . $customer -> id) }}" class="btn btn-sm btn-success">Installment</a>

			</div>

	</div>



@endforeach

<a href="/cityCustomerData" class="btn btn-info">All Customers</a>
</div>




@endsection

