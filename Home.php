<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/hotel_rooms/logo.jpg">
<title> FOBS | Home </title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

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
} 

$sql = "drop table cico";
if ($conn->query($sql) === TRUE) {
} 
 
$sql = "drop table rooms";
if ($conn->query($sql) === TRUE) {
} 

$sql = "drop table stays";
if ($conn->query($sql) === TRUE) {
} 
    
$sql = "drop table price";
if ($conn->query($sql) === TRUE) {
}    
    
$sql = "drop table max_res";
if ($conn->query($sql) === TRUE) {
}    
?>
    
<body>
<body style="scroll-behavior: smooth">
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

<td><center><h1>
    
    <a href="#Reservation">RESERVATION</a></h1>
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
    <h10>Home</h10>
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

<!BODY---------------------------------------------------------------------------------------------->
<div id="gallery_container">
<div class="container">
<img class='photo'  src="images/hotel_rooms/1.jpg">
<img class='photo'  src="images/hotel_rooms/2.jpg">
<img class='photo'  src="images/hotel_rooms/3.jpg">
<img class='photo'  src="images/hotel_rooms/4.jpg">
<img class='photo'  src="images/hotel_rooms/5.jpg">
<img class='photo'  src="images/hotel_rooms/6.jpg">
<img class='photo'  src="images/hotel_rooms/7.jpg">
<img class='photo'  src="images/hotel_rooms/8.jpg">
</div>
</div>

<div id="body">
<h8><center>FOBS' Hotel Reservation</center><br>
	<blockquote>Welcome to FOBS' Hotel standing in the heart of Davao. A 30-minute travel to reach a must-visit destination with its unique blend of Western comfort and Asian hospitality.<br><br>
	FOBS' Hotel  is your first step to experience DAVAO's Best and Pride. Surrounded with big shopping malls and business establishments, 35 elegant guest rooms and suites. Take time to relax with the ambiance, comfort warmth and space, that will surely provide utmost privacy. Almost all rooms are equipped with wifi connection and other ammenities.<br><br>
	Enjoy with families and friends in our restaurants serving everything by day and night. Of course, FOBS' Hotel prioritizes the safety and security of all the guests and associates.</blockquote> 
    </h8>
    
    <blockquote><center />
    <a name="Reservation">
    <h6>Process for Room Reservation</h6></a><br>
    <h8>The process of reserving a room in our website is to first pick a date of checking on and checking out, second will be picking of a room, and lastly to input customer information</h8></blockquote>
    
    <blockquote>
    <h8>Proceed to picking a check-in, check-out date. Click <a href="CICO.php"><strong>here!</strong></a></h8></blockquote>
</div>

<!FOOTER---------------------------------------------------------------------------------------------->
<div id="footer">
<center>
<h8> FOBS Hotel Reservation --- All Rights Reserved - 2017 :)) </h8>
</center>
</div>
</body>
</body>
</html>