<?php session_start();if(!isset($_SESSION['loggedin'])){header("location:index.php");die();}?>
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


$freelancer_firstname=$_POST["freelancer_firstname"];
$freelancer_lastname=$_POST["freelancer_lastname"];
$password=$_POST["password"];
$freelancerid=$_POST["freelancerid"];
$location=$_POST["location"];
$aboutme=$_POST["aboutme"];
$service=$_POST["service"];
$serviceprice=$_POST["serviceprice"];
$servicetimemins=$_POST["servicetimemins"];




$sql="UPDATE freelancers SET password='".$password."',service='".$service."',servicetimemins=".$servicetimemins.",serviceprice='".$serviceprice."',location='".$location."',aboutme='".$aboutme."'  WHERE freelancerid=".$freelancerid;

mysqli_query($conn,$sql);

$sql="delete from links WHERE freelancerid=".$freelancerid;
mysqli_query($conn,$sql);

if (isset($_POST['links'])){
$links=$_POST["links"];
foreach ($links as $key => $value)
{

$sql="insert into links(freelancerid,link) values(".$freelancerid.",'".$value."')";

mysqli_query($conn,$sql);
}
}
  
header("Location: freelancer_home_page.php"); 

$conn->close();
?> 
    

<p>Details Updated</p>
<p>

<?PHP 

echo $_POST['freelancer_firstname']." ".$_POST['freelancer_lastname'];

?>
    
</p>
<a href="freelancer_home_page.php">back</a>
</body>
</html>
