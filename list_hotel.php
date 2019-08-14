<?php  
		if(isset($_GET['q']))
		{
        $q=$_GET['q'];
        $quser=mysqli_query($conn,"SELECT * FROM hotel WHERE city='$q'");
        while($urow=mysqli_fetch_array($quser)){
            ?>
    <div class="card" id="top-item">
        <input type="hidden" name="test" id="hiddenfield" value="Rizki Reynaldi"/>
        <div class="container-image-card">
            <img src=<?php echo $urow['photo_dir']; ?> alt="Avatar" style="width:100%">
        </div>
        <div class="container">
            <h4><b><?php echo $urow['nm_htl']; ?></b></h4>
            <p><?php echo $urow['desc']; ?></p>
        </div>
        <button type="button" class="btn  btnbooking" style="width:100%;background: linear-gradient(0.09turn,#EB2D2E,#1082C5,#7F257D)!important" data-toggle="modal" data-target="#myyModall"
                data-namahotel="<?php echo $urow['nm_htl']; ?>" data-deschotel="<?php echo $urow['desc']; ?>"
                data-idhotel="<?php echo $urow['idhotel']; ?>" data-picdir="<?php echo $urow['photo_dir']; ?>"
        >
            Book NOW!!!</button>
    </div>

<?php }
		}
else
header("location:index.php");
	?>