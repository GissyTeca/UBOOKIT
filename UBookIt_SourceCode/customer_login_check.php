<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="grey.css" rel="stylesheet" type="text/css" /> 

</head> 
<body>
    

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


$customer_email=$_POST['customer_email'];
$password=$_POST['password'];



$sql = "SELECT * FROM customers where customer_email='".$customer_email."' and password='".$password."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $row = $result->fetch_assoc();
    $_SESSION["customer_firstname"] =$row["customer_firstname"];
    $_SESSION["customer_lastname"] = $row["customer_lastname"];
    $_SESSION["customer_email"] =$row["customer_email"];
    $_SESSION["password"] = $row["password"];
    $_SESSION["loggedin"] = "loggedin";
    header("Location: customer_home_page.php"); 
    exit;
} else {
  echo "0 results  login failed";
}
$conn->close();
?> 
    
</p>
<a href="customer_login.php">Reset</a>
</body>
</html>