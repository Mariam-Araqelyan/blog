@extends('layout')
@section('user')
	Edit page
@endsection

@section('content')
<table class="table table-hover">
		<thead>
			<tr>
				<th>User</th>
				<th>Description</th>
				<th>#</th>
				
			</tr>
		</thead>
		<tbody>
		
				<tr>
					<td>{{ $data->name }}</td>
					<td>{{ $data->description }}</td>
					<td>{{ $data->created_at }}</td>
				</tr>
		
		</tbody>
	</table>
@endsection