@extends('_layouts/master')

@section('content')

<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<ul class="list-group">
			<li class="list-group-item">Rap Party Beats 1</li>
			<li class="list-group-item">
				<div id="create-playlist-form">
					<h4>New Playlist</h4>
					<form method="post" action="/playlist/store">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="playlist_title">Title</label>
							<input type="text" class="form-control" name="playlist_title" placeholder="Playlist title">
						</div>
						<ol class="list-group" id="tracks-container">
							<li class="list-group-item list-group-item-info list-label"><b>Tracks:</b></li>
						</ol>
						<div class="form-group">
							<button type="button" class="btn btn-default add-track-btn" data-toggle="modal" data-target="#addTrackModal">+ Add track</button>
						</div>
						<button type="submit" class="btn btn-primary">Create playlist</button>
					</form>
				</div>
				<a href="#" id="new-playlist-link">+ New Playlist </a>
			</li>
		</ul>
	</div>
</div>

@include('curation/add_track_modal')

@stop

@section('scripts')

<script>

$('#new-playlist-link').click(function() {
	$('#create-playlist-form').show();
	$(this).hide();
});

</script>

@stop