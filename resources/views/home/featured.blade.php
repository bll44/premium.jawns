@extends('_layouts/master')

@section('content')


@if(session('featuredCurator'))
<div class="row">
	<div class="col-lg-12 text-center">
		<h2>{{ session('featuredCurator')->username  }}</h2>
		<p>Featured Curator</p>
	</div><!-- /.column -->
</div><!-- /.row -->
@endif

@stop