@extends('_layouts/master')

@section('content')

<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<ul class="list-group">
			<li class="list-group-item">This is a playlist</li>
			<li class="list-group-item">
				<div id="create-playlist-form">
					<h4>New Playlist</h4>
					<form method="post" action="/playlist">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="playlist_title">Title</label>
							<input type="text" class="form-control" name="playlist_title" placeholder="Playlist title">
						</div>
						<ol class="list-group" id="tracks-container">
							<li class="list-group-item list-label"><b>Tracks in Playlist</b></li>
						</ol>
						<div id="new-track-input-container">
							<div class="form-group">
								<input type="text" id="track-src-url-input" class="form-control" placeholder="Source URL to play track">
							</div>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-default">+ Add track</button>
						</div>
						<button type="submit" class="btn btn-primary">Create playlist</button>
					</form>
				</div>
				<a href="#" id="new-playlist-link">+ New Playlist </a>
			</li>
		</ul>
	</div>
</div>

@stop

@section('scripts')

<script>

$('#new-playlist-link').click(function() {
	$('#create-playlist-form').show();
	$(this).hide();
});

</script>

@stop