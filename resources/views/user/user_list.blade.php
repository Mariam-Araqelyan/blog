@extends('layout')
@section('user')
	First page
@endsection

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<th>User</th>
				<th>Description</th>
				<th>#</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $a)
				<tr>
					<td>{{ $a->name }}</td>
					<td>{{ $a->description }}</td>
					<td>
						<a href="{{ url('user/'.$a->id)}}" class="btn btn-primary">
							<i class="glyphicon glyphicon-eye-open"></i>
						</a>
					</td>
					<td>
						<a href="{{ url('user/'.$a->id.'/edit')}}" class="btn btn-primary">
							<i class="glyphicon glyphicon-edit"></i>
						</a>
					</td>
					<td>
						<form action="{{ url('user/'.$a->id)}}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="Delete">
							<button type="submit" class="btn btn-danger">
							<i class="glyphicon glyphicon-trash"></i></button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection