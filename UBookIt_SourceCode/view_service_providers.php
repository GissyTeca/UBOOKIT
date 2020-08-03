<?php session_start();if(!isset($_SESSION['loggedin'])){header("location:index.php");die();}?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="grey.css" rel="stylesheet" type="text/css" /> 

<script>
function check() { 
 
 var listbox =document.getElementById("freelancerid");

if (listbox.selectedIndex==-1)
{
    alert("select freelancer");
    return;
}

var listbox =document.getElementById("bookingday");

if (listbox.selectedIndex==-1)
{
    alert("select freelancer");
    return;
}
  

document.myForm.submit(); 
    
}
</script>
</head>
<body>
    
<form method="post" name="myForm" action="freelancer_booking.php">

    
Freelancers Providing Service :
 <?php
$service_selected=$_POST['service'];
echo $service_selected;
 ?>
<br>
<select id="freelancerid" name="freelancerid" size=4 style="width:425px" onclick="">


 <?php
$servername = "localhost";
$username = "gissyxyz";
$password = "-5n7mJ5BYjFn.7";
$dbname = "gissyxyz_bookings";

$service_selected=$_POST['service'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM freelancers where service='".$service_selected."'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

   echo "<option value=".$row["freelancerid"]." >".$row["freelancer_firstname"]." ".$row["freelancer_lastname"]."</option>\n";

  }
} else {
  echo "0 results";
}
$conn->close();
?> 
   
 </select>
   
<select id="bookingday" style="width:425px" name="bookingday" size=4 >
<?php
for ($i = 0; $i <= 14; $i++) {
$NewDate=Date('l j F Y', strtotime('+'.$i.' day'));
 echo "<option value='".$NewDate."'>".$NewDate."</option>\n";
}
?>
</select>


<button type="button" onclick="check()">ViewProfile</button> 
</form>

<a href="customer_home_page.php">Home</a>
<a href="view_services.php">View Services</a>
<a href="logout.php">Logout</a>
</body>
</html>