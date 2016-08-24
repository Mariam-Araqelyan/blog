<!DOCTYPE html>
<html>
	<head>
		<title>@yield('user')</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	</head>
	<body>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<a href="{{ url('/user/create')}}" class="btn btn-success">
					<i class="glyphicon glyphicon-plus"></i>Add
				</a>
				<a href="{{ url('/user/')}}" class="btn btn-primary">
							<i class="glyphicon glyphicon-eye-open"></i>
							All User
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				@yield('content')
			</div>
		</div>
	</body>
</html>