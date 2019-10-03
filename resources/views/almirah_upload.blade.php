@extends('layout')

@section('almirah_file')

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
				<label class="control-label" for="field1">Add Single Almirah</label>

					<div class="form-controls" id="profs">

						<form class="form-horizontal" role="form" method="post" action="/single_almirah_upload" enctype="multipart/form-data">

							<input type="hidden" name="_token" value="{{csrf_token()}}">

								
									<button class="btn btn-primary single_almirah_add">Add</button>
								
									<div id="single_almirah">

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
				<label class="control-label" for="field1">Add double_almirah</label>
				
					<div class="form-controls" id="profs">

						<form class="form-horizontal" role="form" method="post" action="/double_almirah_upload" enctype="multipart/form-data">

							<input type="hidden" name="_token" value="{{csrf_token()}}">

								
									<button class="btn btn-primary double_almirah_add">Add</button>
								
									<div id="double_almirah">

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
		$(".single_almirah_add").click(function(a) {
			a.preventDefault();

			$("#single_almirah").append('<input type="text" name="title[]" class="form-control" placeholder="Enter another title">', '<input type="file" class="form-control" name="file[]">');
		});
	});


	$(document).ready(function() {
		$(".double_almirah_add").click(function(s) {
			s.preventDefault();

			$("#double_almirah").append('<input type="text" name="title[]" class="form-control" placeholder="Enter another title">', '<input type="file" class="form-control" name="file[]">');
		});
	});

</script>

</body>
</html>

@endsection
