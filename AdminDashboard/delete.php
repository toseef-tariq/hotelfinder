<?php
/**
 * Created by PhpStorm.
 * User: rizkir
 * Date: 5/13/2018
 * Time: 10:05 PM
 */
	include('../conn.php');
	if(isset($_POST['del_hotel'])){
        $id=$_POST['id'];

        $queryDellete = "DELETE FROM `hotel` WHERE `idhotel`='$id'";

        mysqli_query($conn,$queryDellete);
    }
?>