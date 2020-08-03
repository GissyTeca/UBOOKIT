<?php session_start();if(!isset($_SESSION['loggedin'])){header("location:index.php");die();}?>
<html>
<body>
<head>
   
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="grey.css" rel="stylesheet" type="text/css" /> 

<script>
function myFunction() {

var opt = document.createElement("option");
opt.text = document.myform.addlink.value;
opt.value = document.myform.addlink.value;
document.getElementById("links").options.add(opt);
return false;

}

function selectservice() {

document.myform.service.value=document.myform.services.value;
return false;

}

function book()
{
    
var listbox =document.getElementById("bookings");

if (listbox.selectedIndex==-1)
{
    alert("select booking time");
    return;
}
    
document.getElementById("buttomclickedhiddenfield").value="Book";

bookingslot=listbox.options[listbox.selectedIndex].value;
bookingtext=listbox.options[listbox.selectedIndex].text;

customer_name=bookingtext.replace(bookingslot,"");
customer_name=customer_name.trim();


if (customer_name !="") {
    alert("already booked");
    return;
}

document.getElementById("buttomclickedhiddenfield").value="Book";
document.getElementById("bookingslot").value=bookingslot;
document.myform.submit(); 

}


function cancel()
{
var listbox =document.getElementById("bookings");

if (listbox.selectedIndex==-1)
{
    alert("select booking time");
    return;
}
    


customer_firstname_hidden=document.getElementById("customer_firstname").value;
customer_lastname_hidden=document.getElementById("customer_lastname").value;
customer_fullname=customer_firstname_hidden + " " + customer_lastname_hidden;

bookingslot=listbox.options[listbox.selectedIndex].value;
bookingtext=listbox.options[listbox.selectedIndex].text;

customer_name=bookingtext.replace(bookingslot,"");
customer_name=customer_name.trim();

if (customer_name !=customer_fullname) {
    alert("Sorry,cannot cancel since you did not book it");
    return;
}

document.getElementById("buttomclickedhiddenfield").value="Cancel";
document.getElementById("bookingslot").value=bookingslot;
document.myform.submit(); 

}

function updateindexinlistbox()
{


var listbox =document.getElementById("links");

listbox.options[listbox.selectedIndex].value="test1";
listbox.options[listbox.selectedIndex].text="test2";

}

function onclicksubmit() {

 var listbox =document.getElementById("links");
      for (var count = 0; count < listbox.options.length; count++) {
        listbox.options[count].selected = true;
      }
document.myform.submit(); 

}

function loadlink() {
  var listbox =document.getElementById("links");

  window.open(listbox.value);

}

function removeselectedItems()
{

var selectbox =document.getElementById("links");
var i;
for(i=selectbox.options.length-1;i>=0;i--)
{
if(selectbox.options[i].selected)
selectbox.remove(i);
}
}

function clearallitemsinlinkslistbox()
{

var selectbox =document.getElementById("links");
var i;
for(i=selectbox.options.length-1;i>=0;i--)
{
selectbox.remove(i);
}
}



</script>
</head>
<body>
    



 <?php
$servername = "localhost";
$username = "gissyxyz";
$password = "-5n7mJ5BYjFn.7";
$dbname = "gissyxyz_bookings";

//session_start();


if (!empty($_POST["freelancerid"])) {
    $freelancerid=$_POST['freelancerid']; 
    $_SESSION['freelancerid']=$freelancerid;
} else {  
   $freelancerid=$_SESSION['freelancerid'];
}

$freelancerid=abs($freelancerid);


if (!empty($_POST["bookingday"])) {
    $bookingday=$_POST['bookingday']; 
    $_SESSION['bookingday']=$bookingday;
} else {  
    $bookingday=$_SESSION['bookingday'];
}



$customer_firstname=$_SESSION['customer_firstname'];
$customer_lastname=$_SESSION['customer_lastname'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM freelancers where freelancerid=".$freelancerid;
$result = $conn->query($sql);



if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    $freelancer_firstname=$row["freelancer_firstname"];
    $freelancer_lastname=$row["freelancer_lastname"];
    $password=$row["password"];
    $freelancerid=$row["freelancerid"];
    $location=$row["location"];
    $aboutme=$row["aboutme"];
    $serviceprice=$row["serviceprice"];
    $service=$row["service"];
    $servicetimemins=$row["servicetimemins"];
  }
} else {
  echo "0 results";
}
$conn->close();
?> 

    
    
    
<form method="post" name ="myform" action="freelancer_booking_response.php">
    
<input type="hidden" id="buttomclickedhiddenfield" name="buttomclickedhiddenfield" value="3487">
<input type="hidden" id="bookingslot" name="bookingslot" value="3487">


Freelancer Booking: (id=<?php echo $freelancerid;?>)
<br>
<br>
 <input type="hidden" id="freelancerid" name="freelancerid" value="<?php echo $freelancerid;?>">
 <input type="hidden" id="customer_firstname" name="customer_firstname" value="<?php echo $customer_firstname;?>">
 <input type="hidden" id="customer_lastname" name="customer_lastname" value="<?php echo $customer_lastname;?>">
<br>
First Name:
<input type="text" name="freelancer_firstname" readonly value="<?php echo $freelancer_firstname;?>">
<br>
<br>
Last Name:
<input type="text" name="freelancer_lastname" readonly value="<?php echo $freelancer_lastname;?>">
<br>
<br>
Booking Day:
<input type="text" name="bookingday" readonly value="<?php echo $bookingday;?>">
<br>
<br>
Service Price:
<input type="text" name="serviceprice" readonly value="<?php echo $serviceprice;?>">
<br>
<br>
Service Length of Time:
<input type="text" name="servicetimemins" readonly value="<?php echo $servicetimemins;?>">
<br>
<br>
Service Offered:
<input type="text" name="service" readonly value="<?php echo $service;?>">
<br>
<br>
About me:
<br>
<textarea id="aboutme" name="aboutme" readonly rows="4" cols="50">
<?php echo $aboutme;?>
</textarea>

<br>
<br>
Location:
<br>
<textarea id="location" name="location" readonly rows="4" cols="50">
<?php echo $location;?>
</textarea>
<br>
<br>
Links to work:

<br>
<select id="links" multiple style="width:425px"  name="links[]" size=4 >
    
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

$sql = "SELECT * FROM links where freelancerid=".$freelancerid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo $row["link"];
     echo "<option value=".$row["link"]." >".$row["link"]."</option>\n";

  }
} else {
  echo "0 results";
}
$conn->close();
?> 
 
 
 </select>
<br>

<!--<button type="button" onclick="removeselectedItems()">remove</button> -->
<!--<button type="button" onclick="clearallitemsinlinkslistbox()">clear</button>--> 
<button type="button" onclick="loadlink()">load</button> 
<!--<input type="submit" value="Submit" onclick="onclicksubmit()">->

<!-- Write your comments here -->
<br>
<br>
Bookings
<br>
<?php


$bookings=[];
$start_time = "9:00";
for ($mins = 0; $mins <= 480-$servicetimemins; $mins+=$servicetimemins) {
  $slotstartime = strtotime("+".$mins." minutes", strtotime($start_time));
  $bookings[date('H:i', $slotstartime)]="";
} 


?>
<select id="bookings" style="width:425px" name="bookings[]" size=4 >
    
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


$sql = "SELECT * FROM bookings where freelancerid=".$freelancerid." and bookingday='".date('Y-m-d',strtotime($bookingday))."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     
      $bookings[$row["bookingslot"]]=$row["customer_firstname"]." ".$row["customer_lastname"];

  }
} else {
  echo "0 results";
}
 
 

foreach ($bookings as $key => $value) { 
    echo "<option value=".$key." >".$key." ".$value."</option>\n";
}


$conn->close();
?> 
 
 </select>
<button type="button" onclick="book()">book</button> 
<button type="button" onclick="cancel()">cancel</button> 
 

<br>      
</form>

<a href="customer_home_page.php">Home</a>
<a href="logout.php">Logout</a>
</body>
</html>