<?php session_start();if(!isset($_SESSION['loggedin'])){header("location:index.php");die();}?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="grey.css" rel="stylesheet" type="text/css" /> 

</head> 
<body>
<a href="view_services.php">View Services</a> <a href="logout.php">Logout</a>
<br>
<br>

<?php


//session_start();
$customer_email=$_SESSION['customer_email'];
$password=$_SESSION['password'];
$customer_firstname=$_SESSION['customer_firstname'];
$customer_lastname=$_SESSION['customer_lastname'];

echo "First Name: ".$customer_firstname;
echo "<br>";
echo "Last Name: ".$customer_lastname;
echo "<br>";
echo "mail: ".$customer_email;

echo "<br>";
echo "<br>";
echo "My Bookings:";

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



$sql = "SELECT * FROM bookings where customer_firstname='".$customer_firstname."' and customer_lastname='".$customer_lastname."' order by bookingday,bookingslot";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "<br>";
    $bookingday=Date('l j F Y', strtotime($row["bookingday"]));
    echo $row["servicename"]." ".$row["freelancer_firstname"]." ".$row["freelancer_lastname"]." " .$bookingday." ".$row["bookingslot"];

    }

    
} else {
  //echo "0 results  login failed";
}
$conn->close();

?> 
<br>
<a href="logout.php">Logout</a>
<body>
<html>

