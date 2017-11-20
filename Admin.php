<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/hotel_rooms/logo.jpg">
<title> FOBS | Confirmation </title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>  
    
<body>

<!MARGINS--------------------------------------------------------------------------------->
<div id="left_margin">
<br><br><br><br><br><br><br><br><br><br><br>
<table border="0" width="50px">
<tr>
<td><div class="">
<a href="http://www.google.com" target="_blank">
<img src="images/social media/google.jpg" style width="50px" height="50px"></a>
</div></td></tr>

<tr>
<td><div class="">
<a href="http://www.facebook.com" target="_blank">
<img src="images/social media/facebook.png" style width="50px" height="50px"></a>
</div></td></tr>

<tr>
<td><div class="">
<a href="http://www.twitter.com" target="_blank">
<img src="images/social media/Twitter.png" style width="50px" height="50px"></a>
</div></td></tr>

<tr>    
<td><div class="">
<a href="http://www.instagram.com" target="_blank">
<img src="images/social media/instagram.jpg" style width="50px" height="50px"></a>
</div></td></tr>

<tr>    
<td><div class="" target="_blank">
<a href="http://www.youtube.com" target="_blank">
<img src="images/social media/youtube.png" style width="50px" height="50px"></a>
</div></td></tr>
</table>
</div>

<div id="right_margin">

</div>

<!TOP LINKS--------------------------------------------------------------------------------->
<div id="top_links">
<table border="0" width="500px">
<tr>
<td><center><h1>
<a href="http://localhost/Hotel%20Reservation/Home.php"> 
 HOME</a> </h1> 
</center></td>    
    
<td><h1>
    <a href="http://localhost/Hotel%20Reservation/Login.php">Customer Reservation Info</a></h1>
</td>    
    
</tr>
</table>
</div>

<!HEADER--------------------------------------------------------------------------------->
<div id="header">
<table border="0" width="900px">
<tr>
<td><h2> FOBS - Hotel Reservation </h2></td>

<td>
<img src="images/hotel_rooms/logo.jpg" style width="200px" height="90px">
</td>

</tr>
</table>
</div>

<!PLACES LINKS--------------------------------------------------------------------------------->
<div id="link_places">
    <center />
    <h10>Administrative Access</h10>
</div>
<!MARQUEE LINKS--------------------------------------------------------------------------------->

<div id="marquee_links">
<table border="0" width="950px" height="65px">
<tr>
<td width="160px"><h4>Recommended Rooms</h4></td>

<td>
<marquee behavior="scroll" direction="left" scrollamount="5" 
onmouseover="this.stop ();" onmouseout="this.start ();">

<h5>Room 1</h5>
<a href="">
<img class="thumbnail" src="images/hotel_rooms/1.jpg" style width="50px" height="50px"></a>

<h5>Room 2</h5>
<img class="thumbnail" src="images/hotel_rooms/2.jpg" style width="50px" height="50px">

<h5>Room 3</h5>
<img class="thumbnail" src="images/hotel_rooms/3.jpg" style width="50px" height="50px">

<h5>Room 4</h5>
<img class="thumbnail" src="images/hotel_rooms/4.jpg" style width="50px" height="50px">

<h5>Room 5</h5>
<img class="thumbnail" src="images/hotel_rooms/5.jpg" style width="50px" height="50px">

</marquee></td>
</tr>
</table>
</div>

<!BODY-------------------------------------------------------------------------------------------->

<div id="body_left">
    <br>
<?php   
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "use hotel_res";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error;
}
    
echo "<h8>Pending Requests</h8><br><br>"; 
// select values
$sql = "select * from customers where email!='xxx'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
echo     
"First Name: " . $row["fname"] . "<br>" .
"Last Name: " . $row["lname"]. "<br>" .     
"Check-in: " . $row["ci"] . "<br>" . 
"Check-out: " . $row["co"]. "<br>" . 
"Room: " . $row["room"]. "<br>" .
"Total Payment: " . $row["payment"]. "<br>" .
"Number of Residents: " . $row["maxres"]. "<br>" .
"Email: " . $row["email"]. "<br>" .     
"Password: " . $row["password"] . "<br><br>";
        }
    }
?>  
<br>
    
</div>

<div id="body_middle">
<br>    
<?php   
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "use hotel_res";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error;
}

echo "<h8>Accepted Customers</h8><br><br>"; 
// select values
$sql = "select * from accepted_cus where email!='xxx'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
echo     
"First Name: " . $row["fname"] . "<br>" .
"Last Name: " . $row["lname"]. "<br>" .     
"Check-in: " . $row["ci"] . "<br>" . 
"Check-out: " . $row["co"]. "<br>" . 
"Room: " . $row["room"]. "<br>" .
"Total Payment: " . $row["payment"]. "<br>" .
"Number of Residents: " . $row["maxres"]. "<br>" . 
"Email: " . $row["email"]. "<br>" . 
"Password: " . $row["password"] . "<br><br>";
        }
    }
?> 
</div>    
    
<div id="body_right">
<br>
    <h8>Accept pending request</h8> 
    <br><br>
<Form Name ="form1" Method ="POST" ACTION = "Acc_Admin.php">
<INPUT type="Text" VALUE ="" NAME = "email" placeholder="Email-Address" style="width: 250px">
    <br /><br />    
    
<INPUT TYPE = "Submit" Name = "Submit" VALUE = "Accept">
</INPUT>
</INPUT>
</Form> 
    
<br><br>
    <h8>Delete Reservation</h8> 
    <br><br>
<Form Name ="form1" Method ="POST" ACTION = "Del_Admin.php">
<INPUT type="Text" VALUE ="" NAME = "email" placeholder="Email-Address" style="width: 250px">
    <br /><br />    
    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Delete">
</INPUT>    
</INPUT>
</Form>     
</div>

<!FOOTER---------------------------------------------------------------------------------------------->
<div id="footer">
<center>
<h8> FOBS Hotel Reservation --- All Rights Reserved - 2017 :)) </h8>
</center>
</div>
</body>
</html>