@extends('_layouts/master')

@section('content')

@if(session('message'))
<div class="row">
	<div class="alert alert-success alert-dismissable" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">x</span>
		</button>
		{{ session('message') }}
	</div><!-- /.column -->
</div><!-- /.row -->
@endif

<div class="row">
	<div class="col-lg-8">
		<form action="" method="post" id="create-curator-form">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name</label>
				<input class="form-control" type="text" name="name" placeholder="Name" autofocus="true">
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" placeholder="Username">
			</div>
			<div class="form-group">
				<label for="email">Email address</label>
				<input class="form-control" type="text" name="email" placeholder="Email address">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="password_confirmation">Confirm password</label>
				<input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password">
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="admin"> Admin
				</label>
			</div>
			<button type="submit" class="btn btn-primary">Create curator</button>
		</form>
	</div><!-- /.column -->
</div><!-- /.row -->

@stop