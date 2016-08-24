@extends('layout')
@section('user')
	Edit user 
@endsection

@section('content')
	<form action="{{ url('user/'.$data->id)}}" method="post">
		<input type="hidden" name="_method" value="PUT">
		{{ csrf_field() }}
		<label>User</label>
		<input type="text" name="name" value="{{$data->name}}" class="form-control">
		<label>Description</label>
		<input type="text" name="description" value="{{$data->description}}" class="form-control">
		<input type="submit" class="btn btn-success" value="Submit">
	</form>
@endsection