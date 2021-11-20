<?php

$email=  $_POST['email'];
$password=  $_POST['password'];
$name=  $_POST['name'];
$mobileNo=  $_POST['mobileNo'];
$type=  $_POST['type'];
// 
	$host = "localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname= "bharachai";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
	else {

		$Insert = "insert into user ( email, pass, name, mobileNo) values( '$email', '$password', '$name', '$mobileNo')";
		

			
		if ($conn->query($Insert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
		header ("location: allcars.php");
		$conn->close();
		
	}
?>