@extends('layout')



@section('chairman_message')


<h5 class="text-center">Chairman's Message</h5>

<div class="container">

	<div class="row">

		<div class="col-md-2">

			<img src="{{ URL::to('/images/favicon.png') }}" alt="Lights" style="width:100%; height: auto;"/>

		</div>

	</div>

	<div class="row chairman_message">

		<div class="col-md-6">

			<p>Majumder Group is one of the emerging group of Bangladesh. We have been serving our customers for 33 years. Everything started through <i style="color: gray">"Majumder Timber and Furniture"</i> in 1984, And since then we have been meeting the highest demand in the market and trying to provide our best service to our customers<br>
			Currently we are going to start the journey of <b>Majumder Real Estate Limited</b> by considering the market and by meeting the needs of the customers.<br>
			Our belief in a better future is as strong as before.</p>
		</div>

	</div>

</div>

@endsection
