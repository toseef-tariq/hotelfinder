<?php
include('../conn.php');
session_start();
	if(isset($_SESSION['idhotel'])){
		$id=$_SESSION['idhotel'];
		
	}
if(isset($_POST['show'])){
    ?>
    <table class = "table-hotel table table-bordered alert-warning table-hover table-fixed" >
        <thead>
        <th>No.</th>
        <th>Name</th>
		<th>City</th>
        <th>Description</th>
        <th>Photo Dir</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
        $quser=mysqli_query($conn,"select * from hotel WHERE idhotel='$id'");
        $x=0;
        while($urow=mysqli_fetch_array($quser)){
            ?>
            <tr>
                <td><?php echo ++$x; ?></td>
                <td><?php echo $urow['nm_htl']; ?></td>				
                <td><?php echo $urow['city']; ?></td>
                <td><?php echo $urow['desc']; ?></td>
                <td><?php echo $urow['photo_dir']; ?></td>
                <td><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $urow['idhotel']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> | <button class="btn btn-danger delete" value="<?php echo $urow['idhotel']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
                    <?php include('edit_modal.php'); ?>
                </td>
            </tr>
            <?php
        }

        ?>
        </tbody>
    </table>
    <?php
}

if(isset($_POST['show_order'])){
    ?>
    <table class = "table-hotel table table-bordered alert-warning table-hover ">
        <thead>
        <th>No.</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date Start</th>
        <th>Date End</th>
        <th>Guest</th>
        <th>Order Date</th>
        <th>Options</th>
		<th>Status</th>
        </thead>
        <tbody>
        <?php
        $queryListOrder="SELECT * FROM hotel_order WHERE idhotel='$id'";
        $quser=mysqli_query($conn,$queryListOrder);
        $x=0;
        while($urow=mysqli_fetch_array($quser)){
            ?>
            <tr>
                <td><?php echo ++$x; ?></td>
                <td><?php echo $urow['email']; ?></td>
                <td><?php echo $urow['no_telp']; ?></td>
                <td><?php echo $urow['startdate']; ?></td>
                <td><?php echo $urow['enddate']; ?></td>
                <td><?php echo $urow['guest']; ?></td>
                <td><?php echo $urow['order_date']; ?></td>
				 <td><button type="button" class="update-booking btn btn-danger" value="<?php echo $urow['idhotel_order']; ?>" data-flag="0"><span class = "glyphicon glyphicon-remove"></span> Reject</button>
                 <button type="button" class="update-booking btn btn-success" value="<?php echo $urow['idhotel_order']; ?>" data-flag="1"><span class = "glyphicon glyphicon-ok"></span> Accept</button>
                </td>

                <?php if ($urow['isaccept']==1){?>
                    <td><button style="border: none;  background-color: inherit;
  padding:0px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;color: green;" <?php echo $urow['idhotel_order']; ?>" value="<?php echo $urow['idhotel']; ?>" style="width:100px"> Accepted</button></td>
                <?php
                }else{
                    ?>
                <td><button  style="border: none;  background-color: inherit;
  padding: 0px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;color: red;"<?php echo $urow['idhotel_order']; ?>" value="<?php echo $urow['idhotel']; ?>" style="width:100px"> Rejected</button></td>
                    <?php } ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
}




?>