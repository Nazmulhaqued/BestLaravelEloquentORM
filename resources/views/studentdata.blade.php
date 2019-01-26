<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<form method="post" action="add">
				<div class="card-header">
					<h4>Laravel Crud: Elequent Model</h4>	
				</div>
				<div class="card-body">
					<h5 class="card-title">Insert Student Data</h5>
				</div>
				{{csrf_field()}}
				<div class="form-group">
					<label for="">Enter Student Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter Student Name">
				</div>

				<div class="form-group">
					<label for="">Enter Course</label>
					<input type="text" class="form-control" name="course" placeholder="Enter Course">
				</div>

				<div class="form-group">
					<label for="">Student Address</label>
					<input type="text" class="form-control" name="address" placeholder="Student Address">
				</div>

				<div class="form-group">
					<label for="">Student Mobile Number</label>
					<input type="text" class="form-control" name="mobile" placeholder="Student Mobile Number">
				</div>
				<div class="modal-footer">
					<a href="" type="buttton" class="btn btn-secondery">Closse</a>
					<button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
				</div>
			</form>
		</div>
	</div>

</body>
</html>