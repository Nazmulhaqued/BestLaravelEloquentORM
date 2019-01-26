<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style type="text/css">
	body{
		background-color: lightgrey;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h4>Laravel CRUD: Eloquent Model</h4>
			</div>
			<div class="card-body">
				<h5 class="card-title">Fetch / Display Student Data</h5>
			</div>
			<div class="row">
				<div class="col-md-12 text-right">
					<a href="insertdata" class="btn btn-success badge-pill" style="width:80px;"> ADD
					</a>
				</div>
			</div>
			<table class="table table-dark table-hover table--bordered">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Name</th>
						<th scope="col">Course</th>
						<th scope="col">Address</th>
						<th scope="col">Mobile</th>
						<th scope="text-right">Actions</th>
					
					</tr>
				</thead>

				<tbody>
					@foreach($students as $student)
					<tr>
						<th>{{$student->id}} </th>
						<th>{{$student->name}} </th>
						<th>{{$student->course}} </th>
						<th>{{$student->address}} </th>
						<th>{{$student->mobile}} </th>
						<td class="text-right"> <a href="editdata/{{$student->id}}" class="btn btn-primary badge-pill" style="width:80px;">Edit</a></td>
						<td class="text-right"> <a href="delete/{{$student->id}}" class="btn btn-danger badge-pill" style="width:80px;">Delete</a></td>
					</tr>
					@endforeach 
				</tbody>
				
			</table>
		</div>
	</div>
</body>
</html>