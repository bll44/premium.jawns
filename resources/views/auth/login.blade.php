@extends('_layouts/master')

@section('content')

<div class="row">
	<div class="col-lg-8">
		<form action="/login" method="post" id="curator-login-form">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" placeholder="Username" class="form-control" autofocus="true">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="Password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Log in</button>
		</form>
	</div><!-- /.column -->
</div><!-- /.row -->

@stop