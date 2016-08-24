@extends('layout')
@section('user')
	Add page
@endsection

@section('content')
	<form action="{{ url('user')}}" method="post">
		{{ csrf_field() }}
		<label>User</label>
		<input type="text" name="name" class="form-control">
		<label>Description</label>
		<input type="text" name="description" class="form-control">
		<input type="submit" class="btn btn-success" value="Submit">
	</form>
@endsection