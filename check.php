<?php 
session_start();

$email= $_POST['email'];
$pass= $_POST['password'];
   $_SESSION['name'] = $email;
 
    $host = "localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname= "bharachai";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
	else {
    
		
		$s="select * from user where email='".$email."' and pass='".$pass."' ";
		$result= mysqli_query ($conn, $s);
		
		if(mysqli_fetch_assoc($result)> 0){
			header ("location: vcars.php");
			
		}
		else{
			echo "Sorry User Not Registered :D   PLEASE REGISTER";
			
		}
	}
        


?>
