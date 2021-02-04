<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['mid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div style="height: 700px;"  class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Movie</h4></center>
            </div>
            <div class="modal-body">
			<div style="background-image: none;border: none;" class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['mid']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Genre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="genre" value="<?php echo $row['genre']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Release Year:</label>
					</div>
					<div class="col-sm-10">
						<input style="margin-top: 10px" type="text" class="form-control" name="rdate" value="<?php echo $row['rdate']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Runtime:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="runtime" value="<?php echo $row['runtime']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Language:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lang" value="<?php echo $row['lang']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Description:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cast:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cast" value="<?php echo $row['cast']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Director:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="director" value="<?php echo $row['director']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Rating:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="rating" value="<?php echo $row['rating']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Upload Poster:</label>
					</div>
					<div class="col-sm-10">
						<input type="hidden" name="size" value="1000000">
						<input style="margin-top: 10px;" type="file" class="form-control" name="imgpath" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Upload Movie:</label>
					</div>
					<div class="col-sm-10">
						<input type="hidden" name="size" value="30000000">
						<input style="margin-top: 10px;" type="file" class="form-control" name="videopath" required>
					</div>
				</div>
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['mid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Movie</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['name']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>