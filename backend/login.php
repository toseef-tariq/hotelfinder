<?php
include('../conn.php');

$email = $_POST['login'];
$password = $_POST['password'];
$result = mysqli_query($conn,"SELECT *  FROM hotel WHERE nm_htl = '$email' and pas = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
	while ($row = $result->fetch_assoc()) {
     $id=$row['idhotel']."<br>";
}
	session_start();
if(isset($_SESSION['idhotel'])){
session_unset();
header("location:index.html");
}
else{
  
	$_SESSION["idhotel"] =$id;
	header("location:../adminDashboard/index.php");	
}
}
else 
{
	header("location:index.html");
}
?>