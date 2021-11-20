
<?php
 
include 'dbconnect.php';
	$conn = OpenCon();

$status = "";
if(isset($_POST['Location']) )
{

$ID =$_REQUEST['Email'];
$Location=$_REQUEST['Location'];
$City=$_REQUEST['City'];
$slotId=$_REQUEST['slotId'];
$Price = $_REQUEST['Price'];
$Phone = $_REQUEST['Phone'];
$string1 = str_replace(',', '+', $Location);
$string = str_replace(' ', '', $string1);


$s="select * from user where email='".$ID."' ";
		$result= mysqli_query ($conn, $s);
		
		if(mysqli_fetch_assoc($result)> 0){
			$ins_query="insert into building (email,location,city,slotId,price,phone,maps) values ('$ID','$Location','$City','$slotId','$Price', '$Phone','https://www.google.com/maps/search/$string')";
mysqli_query($conn,$ins_query);
$status = "New Record Inserted Successfully.</br></br><a href='allcars.php'>View Inserted Record</a>";
			
		}
		else{
			echo "Sorry User Not Registered :D   PLEASE REGISTER";
			
		}




}
CloseCon($conn);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   
    <title>Signup</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">BharaChai</span> Ltd</h1>
        </div>
        <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li class="current"><a href="signup.php">Signup</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>Visit our market</h1>
        <nav>
          <form>
            <button type="nav" class="button_1" ><a href="allcars.php">View Market</a></button>
          </form>
        </nav>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Be A Proud User</h1>
          
      <div class="dark">
<h1>Koi Bhara Diben?</h1>
<form name="form" method="post" action="">

<p><input type="text" name="Email" placeholder="Enter Email" required /></p>
<p><input type="text" name="Location" placeholder="Enter Full Address" required /></p>
<p><input type="text" name="City" placeholder="Enter City" required /></p>
<p><input type="text" name="slotId" placeholder="Enter SlotId" required /></p>
<p><input type="text" name="Price" placeholder="Enter Price" required /></p>
<p><input type="text" name="Phone" placeholder="Enter Phone Number" required /></p>



<div>
                <h5> </h5>
              </div>
              <button class="button_1" type="submit" value="submit">Submit</button>
           </form> 
      </div>
    </section>

    <footer>
      <p> CSE471 Project</p>
    </footer>
  </body>
</html>