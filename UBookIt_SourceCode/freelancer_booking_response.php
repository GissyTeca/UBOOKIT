<?php session_start();if(!isset($_SESSION['loggedin'])){header("location:index.php");die();}?>
<html>
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="grey.css" rel="stylesheet" type="text/css" /> 
</head> 
<body>
    
    <!-- Write your comments here -->
 <!--<form method="post" action="freelancer_booking.php">-->
 <!--<input type="hidden" id="freelancerid" name="freelancerid" value="<?php echo $_POST["freelancerid"];?>">   -->
    
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


$buttomclickedhiddenfield=$_POST["buttomclickedhiddenfield"];
$bookingslot=$_POST["bookingslot"];
$bookingday=$_POST["bookingday"];
$freelancerid=$_POST["freelancerid"];
//session_start();

$customer_firstname=$_SESSION['customer_firstname'];
$customer_lastname=$_SESSION['customer_lastname'];
$_SESSION['freelancerid']=$freelancerid;



$sql = "SELECT * FROM freelancers where freelancerid=".$freelancerid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $freelancer_firstname=$row["freelancer_firstname"];
    $freelancer_lastname=$row["freelancer_lastname"];
    $freelancer_servicename=$row["service"];
    $freelancer_location=$row["location"];
    $freelancer_servicetime=$row["servicetimemins"];
    $freelancer_serviceprice=$row["serviceprice"];

}

if ($buttomclickedhiddenfield=="Book") 
{


$sql = "SELECT * FROM bookings where freelancerid=".$freelancerid." and bookingslot='".$bookingslot."' and bookingday='".date('Y-m-d',strtotime($bookingday))."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
     echo "1 booking found.already booked";
     exit;
} else {

$sql="insert into bookings(freelancerid,freelancer_firstname,freelancer_lastname,customer_firstname,customer_lastname,bookingslot,bookingday,servicename) values(".$freelancerid.",'".$freelancer_firstname."','".$freelancer_lastname."','".$customer_firstname."','".$customer_lastname."','".$bookingslot."','".date('Y-m-d',strtotime($bookingday))."','".$freelancer_servicename."')";

mysqli_query($conn,$sql);
}

$conn->close();

echo "You have made a booking with ".$freelancer_firstname." ".$freelancer_lastname;
echo "<br>";
echo "Freelancer ID ".$freelancerid;
echo "<br>";
echo "Service: ".$freelancer_servicename;
echo "<br>";
echo "Date: ".$bookingday;
echo "<br>";
echo "Time: ".$bookingslot;
echo "<br>";
echo "Service Price: ".$freelancer_serviceprice;
echo "<br>";
echo "Service Duration: ".$freelancer_servicetime;
echo "<br>";
echo "Location: ".$freelancer_location;
echo "<br>";

}  //book


if ($buttomclickedhiddenfield=="Cancel") 
{

$sql = "Delete from bookings where freelancerid=".$freelancerid." and bookingslot='".$bookingslot."' and bookingday='".date('Y-m-d',strtotime($bookingday))."'";

mysqli_query($conn,$sql);

$conn->close();

echo "You have CANCELLED a booking with ".$freelancer_firstname." ".$freelancer_lastname;
echo "<br>";
echo "Freelancer ID ".$freelancerid;
echo "<br>";
echo "Service: ".$freelancer_servicename;
echo "<br>";
echo "Date: ".$bookingday;
echo "<br>";
echo "Time: ".$bookingslot;
echo "<br>";
}  //Cancel
?> 
    

   
</p>
<a href="freelancer_booking.php">Back to Bookings</a>
<a href="customer_home_page.php">Home</a>
<a href="logout.php">Logout</a>

<!--</form>-->
</body>
</html>

