<?php
 
include 'dbconnect.php';
	$conn = OpenCon();
$Serial_Number=$_REQUEST['Serial_Number'];
$query = "SELECT * from building where buildingId='".$Serial_Number."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
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
          <h1 class="page-title">EDIT</h1>
          
      <div class="dark">
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['Price']) )
{
$Serial_Number = $_REQUEST['Serial_Number'];

$Location =$_REQUEST['Location'];
$City =$_REQUEST['City'];
$SlotId =$_REQUEST['SlotId'];

$Price = $_REQUEST['Price'];
$Phone = $_REQUEST['Phone'];

$update="update building set location='".$Location."', city='".$City."',  slotId='".$SlotId."',  price='".$Price."' ,  phone='".$Phone."' where buildingId='".$Serial_Number."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='vcars.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 

<p><input type="text" name="Location" placeholder="Enter Location" required value="<?php echo $row['location'];?>"/></p>
<p><input type="text" name="City" placeholder="Enter City" required value="<?php echo $row['city'];?>"/></p>
<p><input type="text" name="SlotId" placeholder="Enter ID" required value="<?php echo $row['slotId'];?>"/></p>

<p><input type="text" name="Price" placeholder="Enter Price" required value="<?php echo $row['price'];?>"/></p>
<p><input type="text" name="Phone" placeholder="Enter Phone Number" required value="<?php echo $row['phone'];?>"/></p>


<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<?php } ?>

</div>
</div>
</body>
</html>
