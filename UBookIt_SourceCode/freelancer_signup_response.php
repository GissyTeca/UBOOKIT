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



#echo 'Hello ' . htmlspecialchars($_POST["first"]) . '!';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$freelancer_firstname=$_POST['freelancer_firstname'];
$freelancer_lastname=$_POST['freelancer_lastname'];
$freelancer_email=$_POST['freelancer_email'];
$password=$_POST['password'];


$sql = "insert into freelancers (freelancer_firstname,freelancer_lastname,freelancer_email,password) values ('".$freelancer_firstname."','".$freelancer_lastname."','".$freelancer_email."','".$password."')";

mysqli_query($conn,$sql);
        
$conn->close();
?> 
    
<p>Thanks!</p>
<p>You have signed up as a freelancer:</p>
<p>

<?PHP 

echo $_POST['freelancer_firstname']." ".$_POST['freelancer_lastname'];
echo $_POST['freelancer_email']." ".$_POST['password'];
?>
    
</p>
<a href="freelancer_login.php">Freelancer Login</a>
</body>
</html>