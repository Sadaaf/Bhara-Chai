<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    
    <title>Search</title>
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
      
        <h1>You can search</h1>
        <nav>
		 <div class="search-container">
		<form action="http://localhost/bharachai/search.php" method="GET">
		<input type="text" placeholder="Search" name="query">
      <button type="submit" class="button_1">Search</button>
    </form>
  </div>
        </nav>
      
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">

          
      <div class="dark">
          <h3>For Reservation please Signup</h3>
		 
            <?php
    include 'dbconnect.php';
	$conn = OpenCon();
     
     $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 1;
 
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        
        $raw_results = mysqli_query($conn,"SELECT * FROM building
            WHERE (`city` LIKE '%".$query."%') OR (`location` LIKE '%".$query."%')OR (`price` LIKE '%".$query."%')") or die(mysql_error());
             
        
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
                echo "<p> Location: ".$results['location']." <br/>  City: ".$results['city']."<br/>Phone Number: ".$results['phone']."<br/>Price: ".$results['price']."<br/>Slot Id: ".$results['slotId']."</p>" ;
				echo '<button type="nav" class="button_1" ><a href='.$results['maps'].'>Maps Link</a></button></p>';

				//echo "<img src='{$results['img_dir']}' width='600' height='350'>";
                
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
	CloseCon($conn);
     
?>
      </div>
    </section>

    <footer>
      <p> CSE471 Project</p>
    </footer>
  </body>
</html>
