<?php
 
include 'dbconnect.php';
	$conn = OpenCon();
	  session_start();
	  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>User</title>
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
            <li><a href="insert.php">Aro Bhara Dibo</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
	<div class="container">
      <div class="container">
        <h1>You can search</h1>
        <nav>
		   <div class="search-container">
				<form action="http://localhost/bharachai/search.php" method="GET">
					<input type="text" placeholder="Search" name="query">
					<button type="submit" class="button_1">Search</button>
				</form>
			</div>
		</nav>
	  </div>
	</div>
	</section>
	<div class="dark">
		<div class="form">
		<h5></h5>
		<h2>Your Ads</h2>
		<table width="100%" border="1" style="border-collapse:collapse;">
		<thead>
		<tr><th><strong>Location</strong></th><th><strong>City</strong></th></th><th><strong>Slot ID</strong></th><th><strong>Price</strong></th></th><th><strong>Phone Number</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
		</thead>
		</div>
    </div>
  </body>
<?php

$count=1;
$sel_query="Select * from building where email='". $_SESSION['name']."'  ;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["location"]; ?></td><td align="center"><?php echo $row["city"]; ?></td><td align="center"><?php echo $row["slotId"]; ?></td><td align="center"><?php echo $row["price"]; ?></td><td align="center"><?php echo $row["phone"]; ?></td><td align="center"><a href="edit.php?Serial_Number=<?php echo $row["buildingId"]; ?>">Edit</a></td><td align="center"><a href="delete.php?Serial_Number=<?php echo $row["buildingId"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<div class="form">

<p><a href="home.php">Home</a></p>

</div>


</html>
