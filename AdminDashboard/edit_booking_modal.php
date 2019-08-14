<div class="modal fade" id="edit_booking<?php echo $urow['idhotel_order']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class = "modal-header" style="height: 50px">
			<h1  align="right"  style="margin-top:-50px;color:red;" data-dismiss="modal"><button class="btn btn-danger">&times;</button></h1>
            <h3 class = "text-success modal-title text-center" >Update Booking Hotel Booking Hotel</h3>
		</div>
            <div class="modal-body row" style="padding: 15px">
                <div class="col-sm-4">
                    <button type="button" class="update-booking btn btn-danger" value="<?php echo $urow['idhotel_order']; ?>" data-flag="0"><span class = "glyphicon glyphicon-remove"></span> Reject</button>
                    <button type="button" class="update-booking btn btn-success" value="<?php echo $urow['idhotel_order']; ?>" data-flag="1"><span class = "glyphicon glyphicon-ok"></span> Accept</button>
                </div>
            </div>
    </div>
  </div>
</div>