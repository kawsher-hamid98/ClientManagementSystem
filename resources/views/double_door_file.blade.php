@extends('layout')

@section('double_door_file')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <!-- <link rel="shortcut icon" type="image/png" href="favicon.ico" /> -->

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-3">

			<div class="form-group" id="fields">
				<label class="control-label" for="field1">Add Double Door</label>

					<div class="form-controls" id="profs">

						<form class="form-horizontal" role="form" method="post" action="/double_door_upload" enctype="multipart/form-data">

							<input type="hidden" name="_token" value="{{csrf_token()}}">

								
									<button class="btn btn-primary add-double">Add</button>
								
									<div id="field">

										<input type="text" name="title[]" class="form-control" placeholder="Enter title">
										<input type="file" class="form-control" name="file[]">

									</div>
				
								<input type="submit" class="btn btn-success" value="Insert">
							
						</form>
					</div>

			</div>

		</div>

		<div class="col-md-3">

			<div class="form-group" id="fields">
				<label class="control-label" for="field1">Add Single Door</label>
				
					<div class="form-controls" id="profs">

						<form class="form-horizontal" role="form" method="post" action="/single_door_upload" enctype="multipart/form-data">

							<input type="hidden" name="_token" value="{{csrf_token()}}">

								
									<button class="btn btn-primary add-single">Add</button>
								
									<div id="field1">

										<input type="text" name="title[]" class="form-control" placeholder="Enter title">
										<input type="file" class="form-control" name="file[]">

									</div>
				
								<input type="submit" class="btn btn-success" value="Insert">
							
						</form>
					</div>

			</div>

		</div>
	</div>
</div>

<script type="text/javascript">
	
	$(document).ready(function() {
		$(".add-double").click(function(d) {
			d.preventDefault();

			$("#field").append('<input type="text" name="title[]" class="form-control" placeholder="Enter another title">', '<input type="file" class="form-control" name="file[]">');
		});
	});


	$(document).ready(function() {
		$(".add-single").click(function(s) {
			s.preventDefault();

			$("#field1").append('<input type="text" name="title[]" class="form-control" placeholder="Enter another title">', '<input type="file" class="form-control" name="file[]">');
		});
	});

</script>

</body>
</html>

@endsection
