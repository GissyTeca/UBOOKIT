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


$customer_firstname=$_POST['customer_firstname'];
$customer_lastname=$_POST['customer_lastname'];
$customer_email=$_POST['customer_email'];
$password=$_POST['password'];


$sql = "insert into customers (customer_firstname,customer_lastname,customer_email,password) values ('".$customer_firstname."','".$customer_lastname."','".$customer_email."','".$password."')";



mysqli_query($conn,$sql);
        
$conn->close();
?> 
    
<p>Thanks!</p>
<p>You have signed up:</p>
<p>

<?PHP 

echo $_POST['customer_firstname']." ".$_POST['customer_lastname'];
echo $_POST['customer_email']." ".$_POST['password'];

?>
    
</p>
<a href="customer_login.php">Customer Login</a>
</body>
</html>