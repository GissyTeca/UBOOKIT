<?php session_start();if(!isset($_SESSION['loggedin'])){header("location:index.php");die();}?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="grey.css" rel="stylesheet" type="text/css" /> 
<script>
function somefunction() {   
}
</script>
</head>
<body>
    
<form method="post" name="myForm" action="view_service_providers.php">

    
Choose Service:
<br>
<select id="service" name="service" size=4 onclick="view_freelancers_providing_this_service()">


 <?php
$servername = "localhost";
$username = "gissyxyz";
$password = "-5n7mJ5BYjFn.7";
$dbname = "gissyxyz_bookings";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

     echo "<option value=".$row["servicename"]." >".$row["servicename"]."</option>\n";

  }
} else {
  echo "0 results";
}
$conn->close();
?> 
   
 </select>
    
<input type="submit" value="Submit">
</form>

<a href="customer_home_page.php">Home</a>
<a href="logout.php">Logout</a>
</body>
</html>