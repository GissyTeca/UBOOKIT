<?php session_start();if(!isset($_SESSION['loggedin'])){header("location:index.php");die();}?>
<html>    
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
  window.location.href=listbox.value;

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

function callphpfunction() {
    
    alert("<?php echo myphpfunction()?>");
    
    
}

</script>
</head>
<body>
    
<?php
// Call PHP function from javascript without ajax

function myphpfunction(){
    $mydata='Call by function declaration PHP';
    return $mydata;
}
?>
    
 <?php
$servername = "localhost";
$username = "gissyxyz";
$password = "-5n7mJ5BYjFn.7";
$dbname = "gissyxyz_bookings";

//session_start();
$freelancerid=$_SESSION['freelancerid'];




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

    
    
    
<form method="post" name ="myform" action="freelancer_home_page_save_response.php">
Freelancer Edit: (id=<?php echo $freelancerid;?>)
<br>
<br>
 <input type="hidden" id="freelancerid" name="freelancerid" value="<?php echo $freelancerid;?>">
<br>
First Name:
<input type="text" name="freelancer_firstname" readonly value="<?php echo $freelancer_firstname;?>">
<br>
<br>
Last Name:
<input type="text" name="freelancer_lastname" readonly value="<?php echo $freelancer_lastname;?>">
<br>
<br>
Password:
<input type="text" name="password" value="<?php echo $password;?>">
<br>
<br>
Service Price:
<input type="text" name="serviceprice" value="<?php echo $serviceprice;?>">
<br>
<br>
Service Length of Time:
<input type="text" name="servicetimemins" value="<?php echo $servicetimemins;?>">
<br>
<br>
Service Offered:
<input type="text" name="service" readonly value="<?php echo $service;?>">
<br>
<br>
Select Service:
<br>
<select id="services" name="services" size=4 onclick="selectservice()" >
    
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
<br>
<br>
About me:
<br>
<textarea id="aboutme" name="aboutme" rows="4" cols="50">
<?php echo $aboutme;?>
</textarea>

<br>
<br>
Location:
<br>
<textarea id="location" name="location" rows="4" cols="50">
<?php echo $location;?>
</textarea>
<br>
<br>
Links to work:
<br>
 <button type="button" onclick="myFunction()">Add Link</button> 
<br>
<br>
<input type="text" name="addlink" size=66 value="">
<br>
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

<button type="button" onclick="removeselectedItems()">remove</button> 
<button type="button" onclick="clearallitemsinlinkslistbox()">clear</button> 
<button type="button" onclick="loadlink()">load</button> 
<input type="submit" value="Submit" onclick="onclicksubmit()">
<br>
Bookings
<br>
<?php

$bookings=[];

function setbookingslots()
{
global $bookings;
global $servicetimemins;
$start_time = "9:00";
for ($mins = 0; $mins <= 480-$servicetimemins; $mins+=$servicetimemins) {
  $slotstartime = strtotime("+".$mins." minutes", strtotime($start_time));
  $bookings[date('H:i', $slotstartime)]="";
} 
}

function flushbookingsarray($bookingday)
{
    global $bookings;
    foreach ($bookings as $key => $value) { 
    echo "<option value=".$key." >".$bookingday." ".$key." ".$value."</option>\n";
}

}

?>
<select id="bookings" multiple style="width:425px" name="bookings[]" size=4 >
    
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

setbookingslots();
$sql = "SELECT * FROM bookings where freelancerid=".$freelancerid." order by bookingday,bookingslot";
$result = $conn->query($sql);
$prevbookingday="";
$bookingday="";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $prevbookingday=$bookingday;
    $bookingday=Date('l j F Y', strtotime($row["bookingday"]));
    if (($bookingday != $prevbookingday) && ($prevbookingday !=""))
    {
        flushbookingsarray($prevbookingday);
        setbookingslots();
        $prevbookingday=$bookingday;
    }
    $bookings[$row["bookingslot"]]=$row["customer_firstname"]." ".$row["customer_lastname"];
  }
} else {
  //echo "0 results";
}

flushbookingsarray($prevbookingday);


$conn->close();
?> 
 
 </select>


<br>      
</form>

<a href="freelancer_home_page.php">Home</a>
<a href="logout.php">Logout</a>
</body>
</html>