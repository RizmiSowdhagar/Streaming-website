<!-- Add New -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			
		}
		h4{
			text-align: center;
			position: absolute;
			left: 180px;
		}
		
	</style>
</head>
<body>
	<div style="" class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div style="height: 700px;" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Episode</h4></center>
            </div>
            <div   class="modal-body">
			<div style="background-image: none;border: none;"  class="container-fluid">
			<form method="POST" action="pod-add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Genre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="genre" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Release Year:</label>
					</div>
					<div class="col-sm-10">
						<input style="margin-top: 10px" type="text" class="form-control" name="rdate" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Runtime:</label>
					</div>
					<div class="col-sm-10">
						<input style="" type="text" class="form-control" name="runtime" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Language:</label>
					</div>
					<div class="col-sm-10">
						<input style="" type="text" class="form-control" name="lang" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Description:</label>
					</div>
					<div class="col-sm-10">
						<input style="" type="text" class="form-control" name="description" required>
					</div>
				</div>
<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cast:</label>
					</div>
					<div class="col-sm-10">
						<input style="" type="text" class="form-control" name="cast" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Director:</label>
					</div>
					<div class="col-sm-10">
						<input style="" type="text" class="form-control" name="director" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Rating:</label>
					</div>
					<div class="col-sm-10">
						<input style="" type="text" class="form-control" name="rating" required>
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
						<label class="control-label modal-label">Upload Episode:</label>
					</div>
					<div class="col-sm-10">
						<input type="hidden" name="size" value="30000000">
						<input style="margin-top: 10px;" type="file" class="form-control" name="video" required>
					</div>
				</div>
				

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>

</body>
</html>
