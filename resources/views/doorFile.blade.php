@extends('layout')



@section('door_file')


<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <!-- <link rel="shortcut icon" type="image/png" href="favicon.ico" /> -->

</head>
<body>

	<div class="container file_line" style="margin-top: 3em; border: 1px solid #d9d9d9; padding: 1em">
	<div class="row">

		<div class="col-md-4">

			<h5>This is door_file</h5>
			<form action="/door_upload" method="post" class="form-horizontal" enctype="multipart/form-data">

				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<input type="file" name="file[]" multiple>
				<button type="submit" class="btn btn-info">Add</button>
			</form>

		</div>

	</div>
</div>

</body>
</html>




@endsection