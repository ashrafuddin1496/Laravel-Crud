<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Data</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="crud/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="crud/assets/css/style.css">
	<link rel="stylesheet" href="crud/assets/css/responsive.css">
</head>
<body>



	<div class="wrap-table ">
		<a class="btn btn-sm btn-primary" href="{{url('crud-app')}}">Add Student</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
                @include('validation')
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

                    @foreach($students as $student)

						<tr>
							<td>{{$loop -> index + 1}}</td>
							<td>{{$student->name}}</td>
							<td>{{$student->email}}</td>
							<td>{{$student->cell}}</td>
							<td><img src="{{URL::to('media/students') .'/'.  $student->photo}}" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="{{url('crud-single/' . $student->id)}}">View</a>
								<a class="btn btn-sm btn-warning" href="{{url('crud-edit/' . $student->id)}}">Edit</a>
                                <form style="display: inline-block" action="{{url('crud-delete/' . $student->id)}}" method="post">
                                    @csrf
                                    @method('Delete')
                                    <button class="btn btn-sm btn-danger">Delete</button>

                                </form>
							</td>
						</tr>
                    @endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>








	<!-- JS FILES  -->
	<script src="crud/assets/js/jquery-3.4.1.min.js"></script>
	<script src="crud/assets/js/popper.min.js"></script>
	<script src="crud/assets/js/bootstrap.min.js"></script>
	<script src="crud/assets/js/custom.js"></script>
</body>
</html>
