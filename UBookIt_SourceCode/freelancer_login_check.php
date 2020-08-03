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
$dbname = "gissyxyz_bookings";;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$freelancer_email=$_POST['freelancer_email'];
$password=$_POST['password'];


$sql = "SELECT * FROM freelancers where freelancer_email='".$freelancer_email."' and password='".$password."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION["freelancer_email"] = $freelancer_email;
    $_SESSION["password"] = $password;
    $row = $result->fetch_assoc();
    $_SESSION["freelancerid"] =$row["freelancerid"];
    $_SESSION["loggedin"] = "loggedin";
    header("Location: freelancer_home_page.php"); 
    exit;
} else {
  echo "0 results  login failed";
}
$conn->close();
?> 
    
</p>
<a href="freelancer_login.php">Reset</a>
</body>
</html>
