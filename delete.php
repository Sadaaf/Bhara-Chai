<?php

include 'dbconnect.php';
	$conn = OpenCon();
$Serial_Number=$_REQUEST['Serial_Number'];
$query = "DELETE FROM building WHERE buildingId=$Serial_Number"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());

CloseCon($conn);
?>