<!-- Modal -->
<div class="modal fade" id="addTrackModal" tabindex="-1" role="dialog" aria-labelledby="addTrackLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="addTrackModalTitle">Add track</h4>
			</div>
			<form action="" method="post">
				{{ csrf_field() }}
			<div class="modal-body">
				<div class="form-group">
					<label for="soundcloud-url">Soundcloud URL</label>
					<input type="text" name="soundcloud-url" class="form-control" placeholder="Soundcloud song URL">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->